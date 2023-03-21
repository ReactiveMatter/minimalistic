<div class='page-list'>
<?php  

if (!function_exists('str_contains')) {
    function str_contains(string $haystack, string $needle): bool
    {
        return '' === $needle || false !== strpos($haystack, $needle);
    }
}


if(str_contains($_SERVER['REQUEST_URI'], '/search')):?>	
<div class="search-bar">
<input class="search" type="text" id="jspluginSearchText" placeholder="Search">
</div>
<?php
global $L;

	$html = "";

		$DOMAIN_BASE = DOMAIN_BASE;
$html .= <<<EOF
<script>
	function pluginSearch() {
		var text = document.getElementById("jspluginSearchText").value;
		window.open('$DOMAIN_BASE'+'search/'+text, '_self');
		return false;
	}

	document.getElementById("jspluginSearchText").onkeypress = function(e) {
		if (!e) e = window.event;
		var keyCode = e.keyCode || e.which;
		if (keyCode == '13'){
			pluginSearch();
			return false;
		}
	}
</script>
EOF;

echo $html;
?>
<?php endif ?>

<?php if (empty($content)): ?>
	<div class="page-empty">
	<?php 
	$language->p('No pages found') ?>
	</div>
<?php else: ?>
<table class="table page-results">
	<thead>
		<tr>
			<th class="border-bottom-0 border-top-0 head-title" scope="col">Title</th>
			<th class="border-bottom-0 border-top-0 head-category" scope="col">Category</th>
			<!-- <th class="border-bottom-0 border-top-0 head-tags" scope="col">Tags</th> -->
			<th class="border-bottom-0 border-top-0 head-date text-right" scope="col">Date</th>
		</tr>
	</thead>
	<tbody>

<?php foreach ($content as $page): ?>
<!-- Post -->
		<tr>
	<!-- Title -->
		<td>
		<a class="title" href="<?php echo $page->permalink(); ?>">
		<?php echo ucfirst($page->title()); ?>
		</a>
		</td>

	<!-- Category -->
		<td>
		<a class="category" href="<?=$page->categoryPermalink()?>">
		<?=$page->category()?>
		</a>
		</td>

	<!-- Tags -->
		<!-- <td> -->
		<?php 
		//tag variable is already used
		// $page_tags = $page->tags(true);
		// $c = 0;
		// $total = count($page_tags);
		// foreach ($page_tags as $tagKey=>$tagName) {
		//  $c++;
       	//   $tag = new Tag($tagKey);
       	//   echo '<a class= "tag" href="'.$tag->permalink().'">'.$tag->name().'</a>';
       	//   if($c != $total)
       	//   {
       	//   	echo ", ";
       	//   }
    	// }
		?>
			
		<!-- </td> -->

	<!-- Creation date -->
		<td class="text-right">
		<?php echo $page->date(); ?>
		</td>
	</tr>
<?php endforeach ?>
</tbody>
</table>
<?php endif ?>

<!-- Pagination -->
<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">

		<!-- Previous button -->
		<?php if (Paginator::showPrev()): ?>
			<a class="paginator-link float-left" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"><?php echo $L->get('Previous'); ?></a>

		<?php endif; ?>

		<!-- Next button -->
		<?php if (Paginator::showNext()): ?>
			<a class="paginator-link float-right" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?></a>
		<?php endif; ?>

	</ul>
</nav>
<?php endif ?>
</div>
