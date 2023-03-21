	<!-- Post -->
	<div class="page">

	<!-- Cover image -->
	<?php if ($page->coverImage()): ?>
	<img class="cover-image" alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
	<?php endif ?>

	
	<!-- Title -->
	
	<h1 class="title"><?php echo $page->title(); ?></h1>

	<?php if (!$page->isStatic() && !$url->notFound()): ?>
	<!-- Creation date -->
	<div class="details text-muted"><span class="date"><?php echo $page->date();?></span><span class="ml-auto category"><a class="category muted-link" href="<?=$page->categoryPermalink()?>">
		<?=$page->category()?>
		</a></span></div>
	<?php endif ?>

	<!-- Full content -->
	<div class="content">
	<?php echo $page->content(); ?>
	</div>

	</div>
