<!doctype html>
<html lang="<?php echo \pulsecore\language_to_iso(\pulsecore\wedge\config\get_json_configs()->json->language); ?>">
<head>  
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="<?php echo $page_desc; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<link rel="shortcut icon" type="image/png" href="<?php echo $path; ?>/template/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/template/css/bootstrap.min.css?6533">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/template/style.css?3975">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/template/css/animate.min.css?2871">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/template/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Abril+Fatface&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oleo+Script&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,800,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<title><?php echo $page_title; ?></title>

	<!-- Pulse Core -->
	<?php echo \pulsecore\get_context()->theme->meta->render(); ?> 
	<link rel="stylesheet" href="<?php echo $path; ?>/pulsecore/asset/css/pulsecore.css">
	<?php echo \pulsecore\get_context()->theme->css->render(); ?>
	<?php echo \pulsecore\get_context()->theme->js->render(); ?>
	<!-- Pulse Core End -->



	
<!-- Google Analytics -->
 
<!-- Google Analytics END -->

</head>
<body <?php echo \pulsecore\get_context()->theme->body_tag->render(array('')); ?> >

<!-- Pulse Toolbar -->

{{navigation_logged_in}}

<!-- Pulse Toolbar END -->

<!-- Main container -->
<div class="page-container inner group">
     <?php echo (isset($parsedown) ? $parsedown->text($content) : $content); ?>
</div>
<!-- Main container END -->


<script src="<?php echo $path; ?>/template/js/jquery-3.3.1.min.js?280"></script>
<script src="<?php echo $path; ?>/template/js/bootstrap.bundle.min.js?5630"></script>
<script src="<?php echo $path; ?>/template/js/blocs.min.js?2600"></script>
<script src="<?php echo $path; ?>/template/js/jqBootstrapValidation.js"></script>
<script src="<?php echo $path; ?>/template/js/formHandler.js?4228"></script>
<script src="<?php echo $path; ?>/template/js/lazysizes.min.js" defer></script>
<script src="<?php echo $path; ?>/template/js/scrollFX.js?8662"></script>
<!-- Additional JS END -->



<!-- Stats Tracking Code -->
<?php $http_referrer = (empty($_SERVER['HTTP_REFERER']) ? 'none' : $_SERVER['HTTP_REFERER']); ?>
<script src="<?php echo $path; ?>/<?php echo $admin; ?>/inc/tracker.php?uri=<?php echo $_SERVER['REQUEST_URI']; ?>&ref=<?php echo $http_referrer; ?>"></script>

<?php echo \pulsecore\get_context()->theme->js_body->render(); ?>

<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->

</body>
</html>
