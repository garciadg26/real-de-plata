<?php $title = "Eventos - Mesón Real De Plata"; ?>
<?php $description = "Live a completely pleasant stay, outside the city and in an incomparable historical and country environment. Gran Hacienda & Boutique Hotel. Heritage of humanity dating from the s. XVI, Located in the Old Route of the Silver."; ?>

    <?php include_once "include/head.php" ?>

    <link rel="stylesheet" href="../Public/css/jquery.fancybox-1.3.4.css?ver=1.1.10">

</head>
<body>

    <?php include_once "include/nav.php"; ?>

    <!-- ESPACIO TOP -->
    <div class="space_top"></div>


    <!-- EVENTOS -->
    <section class="encabezado_hacienda text-center" id="encab_hacienda">
        <h2 class="subtit_top home__photo1"><span class="capitular_red">C</span>oming Soon</h2>
        <h3 class="subtitulo home__photo3">Events</h3>
        <h2 class="tit_primero_red max-w900 home__photo5">Exciting live experiences and unforgettable moments.</h2>
    </section>

    <!-- DESCRIPTIVO TIT -->
    <section id="descript_encabezado" class="txt_encabezado">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-6 offset-md-0 home__photo1">
                    <p class="txt_destacado">We offer you the exclusivity of the Hacienda, looking after every detail of this story in which you are the main character.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 home__photo2">
                    <p class="txt_general">The perfect place to turn your dreams into reality:</p>
                    <p class="txt_general">engagement parties, proposals, bachelorette parties, family gatherings, amongst other occasions.</p>
                </div>
            </div>
            <div class="row fila_btn_txt_descrip">
                <div class="col-md-12 text-center">
                    <a class="btn_comun btn_secundario" href="contact.php">More information</a>
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
                        <a class="item_gale_eventos gallery-group" rel="example_group" href="../Public/images/hotel-meson-real-de-plata-eventos1.jpg">
                            <img class="img-fluid" src="../Public/images/hotel-meson-real-de-plata-eventos1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a class="item_gale_eventos gallery-group" rel="example_group" href="../Public/images/hotel-meson-real-de-plata-eventos2.jpg">
                            <img class="img-fluid" src="../Public/images/hotel-meson-real-de-plata-eventos2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="row segunda_fila_img_eventos">
                    <div class="col-md-5">
                        <a class="item_gale_eventos gallery-group img_top20" rel="example_group" href="../Public/images/hotel-meson-real-de-plata-eventos3.jpg">
                            <img class="img-fluid" src="../Public/images/hotel-meson-real-de-plata-eventos3.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a class="item_gale_eventos gallery-group" rel="example_group" href="../Public/images/hotel-meson-real-de-plata-eventos4.jpg">
                            <img class="img-fluid" src="../Public/images/hotel-meson-real-de-plata-eventos4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space_red_foot"></div>
    </section>

    <?php include_once "../Public/include/footer.php" ?>

    <!-- FANCYBOX -->
    <script type="text/javascript" src="../Public/js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="../Public/js/popFancy.js"></script>

</body>
</html>