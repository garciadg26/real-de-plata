<?php $title = "Mesón Real De Plata - Grand Hacienda & Hotel Boutique"; ?>
<?php $description = "Live a completely pleasant stay, outside the city and in an incomparable historical and country environment. Gran Hacienda & Boutique Hotel. Heritage of humanity dating from the s. XVI, Located in the Old Route of the Silver."; ?>

<?php include_once "include/head.php"; ?>

</head>
<body onload="cargandoHome();">
    <?php include_once "include/nav.php"; ?>
    <!-- SLIDER PRINCIPAL -->
    <section>
        <div class="fila_tit_slider">
            <h1 class="tit_slider home__photo1">EVERY DETAIL <br>
                TELLS MANY STORIES
            </h1>
        </div>
        <div class="home-slider owl-carousel js-fullheight">
            <!-- ITEM 01 -->
            <div class="slider-item js-fullheight slider-item01"></div>
            <!-- ITEM 02 -->
            <div class="slider-item js-fullheight slider-item02"></div>
            <!-- ITEM 03 -->
            <div class="slider-item js-fullheight slider-item03"></div>
            <!-- ITEM 04 -->
            <div class="slider-item js-fullheight slider-item04"></div>
            <!-- ITEM 05 -->
            <div class="slider-item js-fullheight slider-item05"></div>
            <!-- ITEM 06 -->
            <div class="slider-item js-fullheight slider-item06"></div>
            <!-- ITEM 07 -->
            <div class="slider-item js-fullheight slider-item07"></div>
            <!-- ITEM 08 -->
            <div class="slider-item js-fullheight slider-item08"></div>
        </div>
        <div class="slider_detalle">
            <div class="">
                <!-- RESERVACIONES -->
                <div class="cont_reserv">
                    <form id="banner_reserva" class="form_reserv_home home__photo4" action="" method="post">
                        <div class="row_reserv">
                            <div class="item_form_date">
                                <!-- Grupo: Fecha de llegada -->                                
                                <div class="icon_after"></div>
                                <input type="text" name="fechaLlegada" id="fechaLlegada" placeholder="Check-in date" onfocus="(this.type='date')" onblur="(this.type='date')">
                                <!-- <p class="txt_date">Fecha de llegada</p> -->
                            </div>
                            <div class="item_form">
                                <!-- Grupo: Teléfono -->
                                <div class="formulario__grupo" id="grupo__telefono">
                                    <div class="formulario__grupo-input">
                                        <img src="../Public/images/svg/icon_phone_gris.svg" alt="">
                                        <input class="formulario__input" type="tel" name="telefono" id="telefono" placeholder="Contact number">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                        <!-- <p class="txt_date">Fecha de salida</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="item_form">
                                <!-- Grupo: Número de personas -->
                                <div class="formulario__grupo" id="grupo__numPersonas">
                                    <div class="formulario__grupo-input">
                                        <img src="../Public/images/svg/icon-numero-personas.svg" alt="">
                                        <input class="formulario__input" type="number" name="numPersonas" id="numPersonas" placeholder="No. of Guests">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item_form">
                                <img src="Public/images/svg/icon-motivo.svg" alt="">
                                <input class="formulario__input" type="text" name="motivoVisita" id="motivoVisita" placeholder="Event type">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <!-- <div class="item_form">
                                <img src="../Public/images/svg/icon-motivo.svg" alt="">
                                <select name="selectMotivo" id="selectMotivo">
                                    <option value="">Reason for your visit</option>
                                    <option value="evento">Event</option>
                                    <option value="vacaciones">Holidays</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="btn_reserv">
                            <div class="formulario__mensaje" id="formulario__mensaje">
                                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> When sending data. </p>
                            </div>
                            <input class="btn_reservar_ahora" type="submit" value="Book now">
                            <!-- RESERVAR AHORA -->
                            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"><b>Reservation:</b> sent successfully!</p>
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
                <div class="cont_isotipo_real home__photo1">
                    <img src="../Public/images/svg/isotipo-real-de-plata.svg" alt="">
                </div>
                <div class="max-w home__photo3">
                    <img src="" alt="">
                    <h1 class="tit_segundo_bn"><span class="capitular">G</span>rand Hacienda & a world heritage site dating from the XVI century, located on what was known as “Ruta de la Plata” meaning the Silver Route.</h1>
                    <p class="txt_general_bn home__photo5">A place full of history where you will experience nature with the luxury and exclusivity of a traditional Hacienda.</p>
                        <div class="cont_btn home__photo7">
                            <a href="en/hacienda.php" class="btn_general btn_principal_bn">Come visit us</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="row contain_banner">
            <div class="image_banner img_banner_lg">
                <img class="img-fluid home__photo1" src="../Public/images/hotel-real-de-plata-exterior.jpg" alt="Hotel real de plata exterior">
            </div>
            <div class="image_banner img_banner_sm">
                <img class="img-fluid home__photo2" src="../Public/images/hotel-real-de-plata-piscina.jpg" alt="Hotel real de plata piscina"> 
            </div>
            <div class="image_banner img_banner_lg">
                <img class="img-fluid home__photo3" src="../Public/images/hotel-real-de-plata-entrada.jpg" alt="Hotel real de plata entrada"> 
            </div>
            <div class="image_banner img_banner_sm">
                <img class="img-fluid home__photo4" src="../Public/images/hotel-real-de-plata-interior-pasillo.jpg" alt="Hotel real de plata interior sala">
            </div>
            <div class="image_banner img_banner_lg">
                <img class="img-fluid home__photo5" src="../Public/images/hotel-real-de-plata-interior-sala.jpg" alt="Hotel real de plata interior sala">
            </div>
            <div class="image_banner img_banner_sm">
                <img class="img-fluid home__photo6" src="../Public/images/hotel-real-de-plata-patio-exterior.jpg" alt="Hotel real de plata patio exterior">
            </div>
        </div>
    </section>
    <!-- HABITACIONES -->
    <section id="habitaciones" class="habitaHome">
        <div class="cont_tit_habitaciones">
            <h2 class="tit_primero home__photo2"><span class="capitular_red">R</span>OOMS</h2>
            <p class="txt_general max-w400 home__photo3">Enjoy a completely pleasant stay, far from the city and in a unique historical and rural environment.</p>
        </div>
        <article class="suite_master suite_05 home__photo1">
            <div class="cont_txt_overlay">
                <p class="suite_number">05</p>
                <h6 class="tit_suite">Junior Suite</h6>
                <a class="btn_comun btn_suite" href="en/master-suite.php">See more</a>
            </div>
        </article>
        <article class="suite_master suite_02 home__photo2">
            <div class="cont_txt_overlay">
                <p class="suite_number">02</p>
                <h6 class="tit_suite">Master Suite</h6>
                <a class="btn_comun btn_suite" href="en/master-suite.php">See more</a>
            </div>
        </article>
        <article class="suite_master suite_03 home__photo3">
            <div class="cont_txt_overlay">
                <p class="suite_number">03</p>
                <h6 class="tit_suite">Superior Suite</h6>
                <a class="btn_comun btn_suite" href="en/master-suite.php">See more</a>
            </div>
        </article>
        <div class="notas_habitaciones">
            <p class="txt_nota_h home__photo1">*Prior reservation is mandatory.</p>
            <p class="txt_nota_h home__photo2">**Adults only.</p>
            <p class="txt_nota_h home__photo3">***No pets allowed.</p>
        </div>
    </section>

    <!-- EVENTOS -->
    <section id="eventosHome" class="eventosHome">
        <div class="content_event">
            <!-- LEFT -->
            <div class="cont_txt_eventos">
                <div class="cont_txt_l">
                    <h1 class="tit_primero home__left1"><span class="capitular_red specs__data">E</span>vents</h1>
                    <h3 class="tit_primero_red home__left2">Coming Soon</h3>
                    <p class="txt_general max-w0 home__left3"><span class="color_red"><b>We offer you the exclusivity of the Hacienda,</b></span> looking after every detail of this story in which you are the main character.</p>
                    <p class="txt_general max-w0 home__left4">The perfect place to turn your dreams into reality: engagement parties, proposals, bachelorette parties, family gatherings, amongst other occasions.</p>
                    <div class="cont_btn home__left5">
                        <a class="btn_comun btn_secundario" href="en/events.php">More information</a>
                    </div>
                </div>
            </div>
            <!-- RIGHT -->
            <div class="cont_img_eventos">
                <img class="img-fluid home__photo6" src="../Public/images/hotel-real-de-plata-entrada.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- UBICACIÓN -->
    <section id="ubicaHome" class="ubicacionHome">
        <div class="content_ubica">
            <h1 class="tit_primero home__photo2"><span class="capitular_red">L</span>OCATION</h1>
            <div class="pleca_txt home__photo4"></div>
            <p class="txt_general max-w03 home__photo6">Camino Real a Chichimequillas No. 1. <br>
                Col. Chichimequillas, El Marqués, Qro. <br>
                C.P. 76250</p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.2365629814335!2d-100.34217419301855!3d20.757946629515576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35fbefbacb021%3A0x99185a1ee630f346!2sHotel%20Mes%C3%B3n%20Real%20de%20Plata!5e0!3m2!1ses-419!2smx!4v1676496653951!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <?php include_once "../Public/include/footer.php"; ?>

    <script type="text/javascript" src="<?php echo constant('URL'); ?>Public/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('URL'); ?>Public/js/slider.js?ver=1.1.10"></script>
    
    <script type="text/javascript" src="<?php echo constant('URL'); ?>Public/js/banner_reserva.js?ver=1.1.15"></script>
</body>
</html>