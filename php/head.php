<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Include Bootstrap CSS file bootstrap.css -->
<?php echo Theme::cssBootstrap(); ?>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::cssLineAwesome(); ?>
<?php echo Theme::css('css/style.css'); ?>

<?php echo Theme::js('js/main.js'); ?>
<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
