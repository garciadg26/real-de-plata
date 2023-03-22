<?php $title = "Junior Suite - Mesón Real De Plata"; ?>
<?php $description = "Vive una estancia completamente placentera, fuera de la ciudad y en un inigualable entorno histórico y campirano. Grand Hacienda & Hotel Boutique. Patrimonio d ela humanidad que data del s. XVI, Ubicada en La Antigua Ruta De La Plata."; ?>

<?php include_once "Public/include/head.php"; ?>

    <link rel="stylesheet" href="Public/css/jquery.fancybox-1.3.4.css?ver=1.1.1">
</head>
<body>

    <?php include_once "Public/include/nav.php"; ?>
    <!-- ESPACIO TOP -->
    <div class="space_top"></div>

    <!-- HACIENDA -->
    <section class="encabezado_hacienda text-center" id="encab_hacienda">
        <h3 class="subtitulo home__photo1">Hacienda</h3>
        <h2 class="tit_primero_red max-w900 home__photo3">Cada rincón está pensado para regalarte el mejor de los recuerdos</h2>
    </section>

    <!-- HABITACIONES DETALLE -->
    <section id="detalle_hab" class="detalle_habitacion">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <?php include_once "Public/include/menuHabitaciones.php"; ?>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- MENU GENERAL -->
                        <div class="col-md-7">
                            <div class="cont_gellery_suite home__photo1">
                                <img class="img-fluid item_gallery" src="./Public/images/Junior-suite-meson-real-de-plata.jpg" alt="Hotel mesón real de plata junior suite habitación">
                                <img class="img-fluid item_gallery" src="./Public/images/Junior-suite-meson-real-de-plata2.jpg" alt="Hotel mesón real de plata junior suite decoración">
                                <img class="img-fluid item_gallery" src="Public/images/Junior-suite-meson-real-de-plata3.jpg" alt="Hotel mesón real de plata junior suite baño">
                            </div>
                            <div class="cont_btn_gallery home__photo10">
                                <a rel="example_group"  class="btn_comun btn_principal_bn gallery-group" href="./Public/images/meson-real-de-plata-junio-suite08.jpg">Ver más fotos</a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite18.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite19.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite15.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite04.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite17.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite16.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite20.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite07.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite01.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite11.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite05.jpg" rel="example_group"></a>
                                <a class="gallery-group"  href="./Public/images/meson-real-de-plata-junio-suite13.jpg" rel="example_group"></a>
                            </div>
                        </div>
                        <!-- DETALLE CONTENIDO -->
                        <div class="col-md-5">
                            <h1 class="tit_primero home__photo1">Junior Suite</h1>
                            <ul class="list_detalle_h">
                                <li class="item_detalle home__photo3">1 king size para 2 adultos</li>
                                <li class="item_detalle home__photo4">Caja fuerte</li>
                                <li class="item_detalle home__photo5">Calefactores</li>
                                <li class="item_detalle home__photo6">TV satelital (sky)</li>
                            </ul>
                            <div class="cont_btn_detalle home__photo7">
                                <a class="btn_comun btn_secundario" href="reservar.php">
                                    <img src="Public/images/svg/icon_reserva_before.svg" alt="">
                                    Reservar</a>
                                <a class="btn_comun btn_principal" href="contacto.php">Contáctanos</a>
                            </div>
                            <p class="txt_general home__photo8">Todas nuestras habitaciones cuentan con 1 cama king size y su ocupación es de 2 adultos.</p>
                            <!-- <p class="txt_general">Cancelación realizada durante las 72 horas de la fecha de llegada, NO se reembolsa el anticipo.</p>
                            <p class="txt_general">Cancelación realizada durante las 120 horas antes de la fecha de llegada, se reembolsa el 50% del anticipo.</p>
                            <p class="txt_general">Cancelación realizada durante las 144 horas antes de la fecha de llegada, se reembolsa el 100% del anticipo.</p> -->
                            <p class="txt_general home__photo9">*Es necesaria previa reservación <br>
                                                    **Instalaciones solo adultos <br>
                                                    ***No aceptamos mascotas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "Public/include/footer.php"; ?>

    <!-- FANCYBOX -->
    <script type="text/javascript" src="Public/js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="Public/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="Public/js/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="Public/js/popFancy.js"></script>

</body>
</html>