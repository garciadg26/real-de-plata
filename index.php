<?php $title = "Mesón Real de Plata - Grand hacienda"; ?>

<?php include_once "Public/include/head.php"; ?>

</head>
<body onload="cargandoHome();">
    <?php include_once "Public/include/nav.php"; ?>
    <!-- SLIDER PRINCIPAL -->
    <section>
        <div class="fila_tit_slider">
            <h1 class="tit_slider">DETALLES QUE <br>
                CUENTAN HISTORIAS
            </h1>
        </div>
        <div class="home-slider owl-carousel js-fullheight">
            <!-- ITEM 01 -->
            <div class="slider-item js-fullheight slider-item01">
            </div>
            <!-- ITEM 02 -->
            <div class="slider-item js-fullheight slider-item02">
            </div>
        </div>
        <div class="slider_detalle">
            <div class="">
                <!-- RESERVACIONES -->
                <div class="cont_reserv">
                    <form class="form_reserv_home" action="" method="post">
                        <div class="row_reserv">
                            <div class="item_form_date">
                                <div class="icon_after"></div>
                                <input type="text" name="fechaLlegada" id="fechaLlegada" placeholder="Fecha de llegada" onfocus="(this.type='date')" onblur="(this.type='date')">
                                <!-- <p class="txt_date">Fecha de llegada</p> -->
                            </div>
                            <div class="item_form_date">
                                <input type="text" name="fechaSalida" id="fechaSalida" placeholder="Fecha de salida" onfocus="(this.type='date')" onblur="(this.type='date')">
                                <!-- <p class="txt_date">Fecha de salida</p> -->
                            </div>
                            <div class="item_form">
                                <img src="Public/images/svg/icon-numero-personas.svg" alt="">
                                <input type="number" name="numPersonas" id="numPersonas" placeholder="No. de personas">
                            </div>
                            <div class="item_form">
                                <img src="Public/images/svg/icon-motivo.svg" alt="">
                                <select name="" id="selectMotivo">
                                    <option value="">Motivo de su visita</option>
                                    <option value="evento">Evento</option>
                                    <option value="vacaciones">Vacaciones</option>
                                </select>
                                <!-- <input type="text" name="" id="" placeholder="Motivo de su visita"> -->
                            </div>
                        </div>
                        <div class="btn_reserv">
                            <button class="btn_reservar_ahora" type="submit">RESERVAR AHORA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- GRAN HACIENDA -->
    <section id="histHome" class="historia_home">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="cont_isotipo_real">
                    <img src="Public/images/svg/isotipo-real-de-plata.svg" alt="">
                </div>
                <div class="max-w">
                    <img src="" alt="">
                    <h1 class="tit_segundo_bn"><span class="capitular">G</span>rand Hacienda & Hotel Boutique patrimonio de la humanidad que data del s. XVI, ubicada en la antigua Ruta de la Plata.</h1>
                    <p class="txt_general_bn">Un lugar lleno de historia donde vives la naturaleza con lujo
                        y la exclusividad de una hacienda tradicional.</p>
                        <div class="cont_btn">
                            <a href="hacienda.php" class="btn_general btn_principal_bn">CONÓCENOS</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="row contain_banner">
            <div class="image_banner img_banner_lg">
                <img class="img-fluid" src="Public/images/hotel-real-de-plata-exterior.jpg" alt="Hotel real de plata exterior">
            </div>
            <div class="image_banner img_banner_sm">
                <img class="img-fluid" src="Public/images/hotel-real-de-plata-piscina.jpg" alt="Hotel real de plata piscina"> 
            </div>
            <div class="image_banner img_banner_lg">
                <img class="img-fluid" src="Public/images/hotel-real-de-plata-entrada.jpg" alt="Hotel real de plata entrada"> 
            </div>
            <div class="image_banner img_banner_sm">
                <img class="img-fluid" src="Public/images/hotel-real-de-plata-interior-pasillo.jpg" alt="Hotel real de plata interior sala">
            </div>
            <div class="image_banner img_banner_lg">
                <img class="img-fluid" src="Public/images/hotel-real-de-plata-interior-sala.jpg" alt="Hotel real de plata interior sala">
            </div>
            <div class="image_banner img_banner_sm">
                <img class="img-fluid" src="Public/images/hotel-real-de-plata-patio-exterior.jpg" alt="Hotel real de plata patio exterior">
            </div>
        </div>
    </section>
    <!-- HABITACIONES -->
    <section id="habitaciones" class="habitaHome">
        <div class="cont_tit_habitaciones">
            <h2 class="tit_primero"><span class="capitular_red">H</span>ABITACIONES</h2>
            <p class="txt_general max-w400">Vive una estancia completamente placentera, fuera de la ciudad y en un inigualable entorno histórico y campirano.</p>
        </div>
        <article class="suite_master suite_05">
            <div class="cont_txt_overlay">
                <p class="suite_number">05</p>
                <h6 class="tit_suite">Junior Suite</h6>
                <a class="btn_comun btn_suite" href="master-suite.php">Ver más</a>
            </div>
        </article>
        <article class="suite_master suite_02">
            <div class="cont_txt_overlay">
                <p class="suite_number">02</p>
                <h6 class="tit_suite">Master Suite</h6>
                <a class="btn_comun btn_suite" href="master-suite.php">Ver más</a>
            </div>
        </article>
        <article class="suite_master suite_03">
            <div class="cont_txt_overlay">
                <p class="suite_number">03</p>
                <h6 class="tit_suite">Superior Suite</h6>
                <a class="btn_comun btn_suite" href="master-suite.php">Ver más</a>
            </div>
        </article>
        <div class="notas_habitaciones">
            <p class="txt_nota_h">*Es necesaria previa reservación</p>
            <p class="txt_nota_h">**Instalaciones solo adultos</p>
            <p class="txt_nota_h">***No aceptamos mascotas</p>
        </div>
    </section>

    <!-- EVENTOS -->
    <section id="eventosHome" class="eventosHome">
        <div class="content_event">
            <!-- LEFT -->
            <div class="cont_txt_eventos">
                <div class="cont_txt_l">
                    <h1 class="tit_primero"><span class="capitular_red">E</span>ventos</h1>
                    <h3 class="tit_primero_red">Próximamente</h3>
                    <p class="txt_general max-w0"><span class="color_red"><b>Ofrecemos la exclusividad del lugar</b></span> con el único propósito de cuidar cada detalle de esta historia en la que ustedes son los protagonistas.</p>
                    <p class="txt_general max-w0">El lugar ideal para que vivas el evento de tus sueños. Fiestas de compromiso, pedidas de mano, despedidas de soltera(o), encuentros familiares y muchos más.</p>
                    <div class="cont_btn">
                        <a class="btn_comun btn_secundario" href="eventos.php">Más información</a>
                    </div>
                </div>
            </div>
            <!-- RIGHT -->
            <div class="cont_img_eventos">
                <img class="img-fluid" src="Public/images/hotel-real-de-plata-entrada.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- UBICACIÓN -->
    <section id="ubicaHome" class="ubicacionHome">
        <div class="content_ubica">
            <h1 class="tit_primero"><span class="capitular_red">U</span>BICACIÓN</h1>
            <div class="pleca_txt"></div>
            <p class="txt_general max-w03">Camino Real a Chichimequillas No. 1. <br>
                Col. Chichimequillas, El Marqués, Qro. <br>
                C.P. 76250</p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.2365629814335!2d-100.34217419301855!3d20.757946629515576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35fbefbacb021%3A0x99185a1ee630f346!2sHotel%20Mes%C3%B3n%20Real%20de%20Plata!5e0!3m2!1ses-419!2smx!4v1676496653951!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <?php include_once "Public/include/footer.php"; ?>

    <script type="text/javascript" src="Public/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="Public/js/slider.js"></script>
    
</body>
</html>