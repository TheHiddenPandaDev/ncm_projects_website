<?php
    include "".$_SERVER['DOCUMENT_ROOT']."/ncm/config/config.php";

?>
<!DOCTYPE html><!--  Last Published: Mon Jun 19 2023 17:41:03 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5f6b88914d3eeabe45532bed" data-wf-site="5f6b88914d3eea4ffa532bec" lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta content="<?php echo $description; ?>>" name="description">
    <meta content="<?php echo $title; ?>" property="og:title">
    <meta content="<?php echo $description; ?>" property="og:description">
    <meta content="<?php echo $image; ?>" property="og:image">
    <meta content="<?php echo $title; ?>" property="twitter:title">
    <meta content="<?php echo $description; ?>" property="twitter:description">
    <meta content="<?php echo $image; ?>" property="twitter:image">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo $project_url; ?>ui/assets/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $project_url; ?>ui/assets/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $project_url; ?>ui/assets/css/network-creativity-manufacturing.webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $project_url; ?>ui/assets/libraries/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo $project_url; ?>ui/assets/libraries/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo $project_url; ?>ui/assets/libraries/fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?php echo $project_url; ?>ui/assets/css/styles.css?timestamp=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Barlow:regular,500,600,700,800,800italic,900,900italic"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="<?php echo $project_url; ?>ui/assets/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo $project_url; ?>ui/assets/images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body">
<div data-animation="over-right" class="navbar w-nav" data-easing2="ease-in-out-quart" data-easing="ease-in-out-quart" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="500" data-doc-height="1">
    <div class="w-embed">
        <style>
            .big-number {
                /* Prefix required. Even Firefox only supports the -webkit- prefix */
                -webkit-text-stroke-width: 3px;
                -webkit-text-stroke-color: #e0004d;
            }

            .othercss {
                -webkit-backdrop-filter: saturate(180%) blur(20px);
                backdrop-filter: saturate(180%) blur(20px);
            }
        </style>
    </div>
    <div class="container w-container">
        <div class="navbar-warp">
            <a href="<?php echo $project_url; ?>" aria-current="page" class="brand w-nav-brand w--current"><img src="<?php echo $project_url; ?>ui/assets/images/Logo.svg" loading="lazy" width="170" alt="" class="image"></a>
            <nav role="navigation" class="nav-menu w-nav-menu">
                <a href="<?php echo $project_url; ?>soluciones" class="nav-link w-nav-link <?php if($page == "soluciones") echo 'w--current'; ?> ">Soluciones</a>
                <a href="<?php echo $project_url; ?>metodo" class="nav-link w-nav-link <?php if($page == "metodo") echo 'w--current'; ?> ">Método</a>
                <a href="<?php echo $project_url; ?>nosotros" class="nav-link w-nav-link <?php if($page == "nosotros") echo 'w--current'; ?> ">Nosotros</a>
                <a href="<?php echo $project_url; ?>duraluxe" class="nav-link w-nav-link <?php if($page == "duraluxe") echo 'w--current'; ?> ">Duraluxe</a>
            </nav>
        </div>
    </div>
    <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
    </div>
</div>