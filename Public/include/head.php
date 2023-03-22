<!DOCTYPE html>
<html lang="es">
<head>

    <?php 
        $url_actual = $_SERVER['REQUEST_URI']; 
    ?>
    
    <?php include_once "analitycs.php"; ?>
    <?php include_once "../config/config.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <meta name="title" content="<?php echo $title; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="Meson Real De Plata, Ruta De La Plata, Queretaro, travel mexico, travel, hotel boutique, hote, turismo, luxury hotel, luxury boutique hotel, travel queretaro, hacienda hotel, viaje queretaro, descanso, hoteles, chichimequillas, hacienda" />
    <meta http-equiv="content-language" content="es_MX" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="http://mesonrealdeplata.com/" />
    <link rel="alternate" hreflang="es" href="http://mesonrealdeplata.com/" />
    <meta name="author" content="tipos libres" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:image" content="https://mesonrealdeplata.com/Public/images/Meson-real-de-plata-hotel-boutique.jpg" />
    <meta property="og:url" content="http://mesonrealdeplata.com/">
    <meta property="og:type" content="article">
    <meta property="og:description" content="<?php echo $description; ?>">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="Public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="Public/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="Public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://use.typekit.net/txt2hjs.css">

    <!-- ESTILOS -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>Public/css/style.css?ver=1.1.40">

    <!-- SLIDER -->
    <link rel="stylesheet" href="Public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Public/css/slide.css?ver=1.1.17">

    <!-- ICONS -->
    <link rel="stylesheet" href="Public/css/ionicons.min.css">