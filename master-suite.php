<?php $title = "Master Suite - Mesón Real de Plata"; ?>

<?php include_once "Public/include/head.php"; ?>

    <link rel="stylesheet" href="Public/css/jquery.fancybox-1.3.4.css?ver=1.1.1">
</head>
<body>

    <?php include_once "Public/include/nav.php"; ?>
    <!-- ESPACIO TOP -->
    <div class="space_top"></div>

    <!-- HACIENDA -->
    <section class="encabezado_hacienda text-center" id="encab_hacienda">
        <h3 class="subtitulo">Hacienda</h3>
        <h2 class="tit_primero_red max-w900">Cada rincón está pensado para regalarte el mejor de los recuerdos</h2>
    </section>

    <!-- HABITACIONES DETALLE -->
    <section id="detalle_hab" class="detalle_habitacion">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list_habitaciones">
                        <a href="#" class="item_suite">
                            <li>Junior Suite</li>
                        </a>
                        <a href="#" class="item_suite active">
                            <li>Master Suite</li>
                        </a>
                        <a href="#" class="item_suite">
                            <li>Superior Suite</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <!-- MENU GENERAL -->
                        <div class="col-md-7">
                            <div class="cont_gellery_suite">
                                <img class="img-fluid item_gallery" src="./Public/images/hotel-meson-real-de-plata-master-suite1.jpg" alt="Hotel mesón real de plata">
                                <img class="img-fluid item_gallery" src="./Public/images/hotel-meson-real-de-plata-master-suite2.jpg" alt="Hotel mesón real de plata">
                                <img class="img-fluid item_gallery" src="Public/images/hotel-meson-real-de-plata-master-suite3.jpg" alt="Hotel mesón real de plata">
                            </div>
                            <div class="cont_btn_gallery">
                                <a rel="example_group" class="btn_comun btn_principal_bn gallery-group" href="./Public/images/hotel-meson-real-de-plata-master-suite1-lg.jpg">Ver más fotos</a>
                                <a class="gallery-group" href="./Public/images/hotel-meson-real-de-plata-master-suite2-lg.jpg" rel="example_group"></a>
                                <a class="gallery-group" href="./Public/images/hotel-meson-real-de-plata-master-suite3-lg.jpg" rel="example_group"></a>
                            </div>
                        </div>
                        <!-- DETALLE CONTENIDO -->
                        <div class="col-md-5">
                            <h1 class="tit_primero">Master Suite</h1>
                            <ul class="list_detalle_h">
                                <li class="item_detalle">1 king size para 2 adultos</li>
                                <li class="item_detalle">Caja fuerte</li>
                                <li class="item_detalle">Calefactores</li>
                                <li class="item_detalle">TV satelital (sky)</li>
                                <li class="item_detalle">Sala</li>
                                <li class="item_detalle">Superior</li>
                                <li class="item_detalle">2 unidades con chimenea</li>
                                <li class="item_detalle">1 unidad con jacuzzi</li>
                            </ul>
                            <div class="cont_btn_detalle">
                                <a class="btn_comun btn_secundario" href="#">
                                    <img src="Public/images/svg/icon_reserva_before.svg" alt="">
                                    Reservar</a>
                                <a class="btn_comun btn_principal" href="#">Contáctanos</a>
                            </div>
                            <p class="txt_general">Todas nuestras habitaciones cuentan con 1 cama king size y su ocupación es de 2 adultos.</p>
                            <p class="txt_general">Cancelación realizada durante las 72 horas de la fecha de llegada, NO se reembolsa el anticipo.</p>
                            <p class="txt_general">Cancelación realizada durante las 120 horas antes de la fecha de llegada, se reembolsa el 50% del anticipo.</p>
                            <p class="txt_general">Cancelación realizada durante las 144 horas antes de la fecha de llegada, se reembolsa el 100% del anticipo.</p>
                            <p class="txt_general">*Es necesaria previa reservación <br>
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