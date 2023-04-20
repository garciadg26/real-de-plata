<?php $title = "Eventos - Mesón Real De Plata"; ?>
<?php $description = "Vive una estancia completamente placentera, fuera de la ciudad y en un inigualable entorno histórico y campirano. Patrimonio de la humanidad que data del s. XVI, Ubicada en La Antigua Ruta De La Plata."; ?>

    <?php include_once "Public/include/head.php" ?>

    <link rel="stylesheet" href="Public/css/jquery.fancybox-1.3.4.css?ver=1.1.10">

</head>
<body>

    <?php include_once "Public/include/nav.php"; ?>

    <!-- ESPACIO TOP -->
    <div class="space_top"></div>


    <!-- EVENTOS -->
    <section class="encabezado_hacienda text-center" id="encab_hacienda">
        <h2 class="subtit_top home__photo1"><span class="capitular_red">P</span>róximamente</h2>
        <h3 class="subtitulo home__photo3">Eventos</h3>
        <h2 class="tit_primero_red max-w900 home__photo5">Vive experiencias emocionantes y momentos inolvidables</h2>
    </section>

    <!-- DESCRIPTIVO TIT -->
    <section id="descript_encabezado" class="txt_encabezado">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-6 offset-md-0 home__photo1">
                    <p class="txt_destacado">Ofrecemos un lugar exclusivo, cuidando cada detalle para que tú seas el protagonista de tu historia.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 home__photo2">
                    <p class="txt_general">El lugar ideal para que vivas el evento de tus sueños.</p>
                    <p class="txt_general">Fiestas de compromiso, pedidas de mano, despedidas de soltera(o), bodas, encuentros familiares y muchos más.</p>
                </div>
            </div>
            <div class="row fila_btn_txt_descrip">
                <div class="col-md-12 text-center">
                    <a class="btn_comun btn_secundario" href="contacto.php">Contáctanos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERÍA FOTOS -->
    <section class="gallery_eventos" id="gallery_eventos">
        <div class="container">
            <div class="cont_gale_eventos">
                <div class="row primera_fila_img_eventos">
                    <div class="col-md-7">
                        <a class="item_gale_eventos gallery-group" rel="example_group" href="./Public/images/hotel-meson-real-de-plata-eventos1.jpg">
                            <img class="img-fluid" src="Public/images/hotel-meson-real-de-plata-eventos1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a class="item_gale_eventos gallery-group" rel="example_group" href="./Public/images/Meson-real-de-plata-eventos-inolvidables.jpg">
                            <img class="img-fluid" src="Public/images/Meson-real-de-plata-eventos-inolvidables.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="row segunda_fila_img_eventos">
                    <div class="col-md-5">
                        <a class="item_gale_eventos gallery-group img_top20" rel="example_group" href="./Public/images/Meson-real-de-plata-eventos-unicos.jpg">
                            <img class="img-fluid" src="Public/images/Meson-real-de-plata-eventos-unicos.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a class="item_gale_eventos gallery-group" rel="example_group" href="Public/images/hotel-meson-real-de-plata-eventos4.jpg">
                            <img class="img-fluid" src="Public/images/hotel-meson-real-de-plata-eventos4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space_red_foot"></div>
    </section>

    <?php include_once "Public/include/footer.php" ?>

    <!-- FANCYBOX -->
    <script type="text/javascript" src="Public/js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="Public/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="Public/js/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="Public/js/popFancy.js"></script>

</body>
</html>