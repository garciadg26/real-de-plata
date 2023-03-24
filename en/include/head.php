<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $url_actual = $_SERVER['REQUEST_URI']; 
    ?>
    

    <?php include_once "../Public/include/analitycs.php"; ?>
    <?php include_once "../config/config.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <meta name="title" content="<?php echo $title; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="Meson Real De Plata, Silver Route, Queretaro, travel mexico, travel, boutique hotel, hote, tourism, luxury hotel, luxury boutique hotel, travel queretaro, hacienda hotel, rest, hotels, chichimequillas, hacienda" />
    <meta http-equiv="content-language" content="en-US" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="http://mesonrealdeplata.com/en/" />
    <link rel="alternate" hreflang="es" href="http://mesonrealdeplata.com/en/" />
    <meta name="author" content="tipos libres" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:image" content="https://mesonrealdeplata.com/Public/images/Meson-real-de-plata-hotel-boutique.jpg" />
    <meta property="og:url" content="http://mesonrealdeplata.com/en/">
    <meta property="og:type" content="article">
    <meta property="og:description" content="<?php echo $description; ?>">
    
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo constant('URL'); ?>Public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo constant('URL'); ?>Public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo constant('URL'); ?>Public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo constant('URL'); ?>Public/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo constant('URL'); ?>Public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://use.typekit.net/txt2hjs.css">

    <!-- ESTILOS -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>Public/css/style.css?ver=1.1.42">

    <!-- SLIDER -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>Public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>Public/css/slide.css?ver=1.1.17">

    <!-- ICONS -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>Public/css/ionicons.min.css">