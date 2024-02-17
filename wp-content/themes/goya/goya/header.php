<?php
/**
 * The header area 
 *
 * This is the template that displays all of the <head> section and everything up until <div class="site-content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goya
 */
 ?>

 <!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/network-creativity-manufacturing.webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/libraries/fontawesome/css/solid.css" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5K7HXCV2GT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-5K/HXCV2GT');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css?timestamp=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Barlow:regular,500,600,700,800,800italic,900,900italic"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/webclip.png" rel="apple-touch-icon">
	<?php 
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head(); 

	?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'goya_before_site' ) ?>

<div id="wrapper" class="open">
	
	<div class="click-capture"></div>
	
	<?php do_action( 'goya_before_header' ) ?>

	<div class="page-wrapper-inner">

		<?php 
		// Elementor header or default
		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
			do_action( 'goya_header' );
		} ?>

		<div role="main" class="site-content">

			<div class="header-spacer"></div>

			<?php do_action( 'goya_after_header_spacer' ); ?>