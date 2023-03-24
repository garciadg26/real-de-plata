<?php $title = "Master Suite - Mesón Real De Plata"; ?>
<?php $description = "Live a completely pleasant stay, outside the city and in an incomparable historical and country environment. Gran Hacienda & Boutique Hotel. Heritage of humanity dating from the s. XVI, Located in the Old Route of the Silver."; ?>
<?php include_once "include/head.php"; ?>

    <link rel="stylesheet" href="../Public/css/jquery.fancybox-1.3.4.css?ver=1.1.1">
</head>
<body>

    <?php include_once "include/nav.php"; ?>
    <!-- ESPACIO TOP -->
    <div class="space_top"></div>

    <!-- HACIENDA -->
    <section class="encabezado_hacienda text-center" id="encab_hacienda">
        <h3 class="subtitulo home__photo1">Hacienda</h3>
        <h2 class="tit_primero_red max-w900 home__photo3">Every space is designed to offer you lifetime lasting memories.</h2>
    </section>

    <!-- HABITACIONES DETALLE -->
    <section id="detalle_hab" class="detalle_habitacion">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <?php include_once "../Public/include/menuHabitaciones.php"; ?>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <!-- MENU GENERAL -->
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="cont_gellery_suite home__photo1">
                                <img class="img-fluid item_gallery" src="../Public/images/master-suite-meson-real-de-plata.jpg" alt="Mesón Real de Plata Master Suite habitación">
                                <img class="img-fluid item_gallery" src="../Public/images/master-suite-meson-real-de-plata2.jpg" alt="Mesón Real de Plata Master Suite habitación">
                                <img class="img-fluid item_gallery" src="../Public/images/master-suite-meson-real-de-plata3.jpg" alt="Mesón Real de Plata Master Suite habitación">
                            </div>
                            <div class="cont_btn_gallery home__photo11">
                                <a rel="example_group" class="btn_comun btn_principal_bn gallery-group" href="../Public/images/meson-real-de-master-suite03.jpg">See more photos</a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite01.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite06.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite08.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite07.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite05.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite09.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite04.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite02.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="../Public/images/meson-real-de-master-suite10.jpg" rel="example_group"></a>
                            </div>
                        </div>
                        <!-- DETALLE CONTENIDO -->
                        <div class="col-xl-5 col-lg5 col-md-5 col-sm-12">
                            <h1 class="tit_primero home__photo1">Master Suite</h1>
                            <ul class="list_detalle_h">
                                <li class="item_detalle home__photo3">1 king size bed</li>
                                <li class="item_detalle home__photo4">Safe</li>
                                <li class="item_detalle home__photo5">Heaters</li>
                                <li class="item_detalle home__photo6">Satellite TV</li>
                                <li class="item_detalle home__photo7">Living Room</li>
                            </ul>
                            <div class="cont_btn_detalle home__photo8">
                                <a class="btn_comun btn_secundario" href="book.php">
                                    <img src="Public/images/svg/icon_reserva_before.svg" alt="">
                                    Book</a>
                                <a class="btn_comun btn_principal" href="contact.php">Contact us</a>
                            </div>
                            <p class="txt_general home__photo9">All of our rooms have 1 king size bed and capacity for 2 guests per room.</p>
                            <!-- <p class="txt_general">Cancelación realizada durante las 72 horas de la fecha de llegada, NO se reembolsa el anticipo.</p>
                            <p class="txt_general">Cancelación realizada durante las 120 horas antes de la fecha de llegada, se reembolsa el 50% del anticipo.</p>
                            <p class="txt_general">Cancelación realizada durante las 144 horas antes de la fecha de llegada, se reembolsa el 100% del anticipo.</p> -->
                            <p class="txt_general home__photo10">*Prior reservation is mandatory. <br>
                                                    **Adults only. <br>
                                                    ***No pets allowed. <br>
                                                    ****Available when hiring an event.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "../Public/include/footer.php"; ?>

    <!-- FANCYBOX -->
    <script type="text/javascript" src="../Public/js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="../Public/js/popFancy.js"></script>

</body>
</html>