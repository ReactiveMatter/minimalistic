<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<?php include(THEME_DIR_PHP.'head.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
</head>
<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'navbar.php'); ?>

	<!-- Content -->
	<div class="container main">

			<?php
				// Bludit content are pages
				// But if you order the content by date
				// These pages works as posts

				// $WHERE_AM_I variable detect where the user is browsing
				// If the user is watching a particular page/post the variable takes the value "page"
				// If the user is watching the frontpage the variable takes the value "home"

				Theme::plugins('pageBegin'); 

				if ($WHERE_AM_I == 'page') {
					include(THEME_DIR_PHP.'page.php');
				} 
				else {
					include(THEME_DIR_PHP.'home.php');
				}

				Theme::plugins('pageEnd');
			?>

	</div>
	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>

	<!-- Javascript -->
	<?php
		// Include Jquery file from Bludit Core
		echo Theme::jquery();

		// Include javascript Bootstrap file from Bludit Core
		echo Theme::jsBootstrap();
	?>

	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>