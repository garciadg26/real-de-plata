<?php $title = "Contacto - Mesón Real De Plata"; ?>
<?php $description = "Live a completely pleasant stay, outside the city and in an incomparable historical and country environment. Heritage of humanity dating from the s. XVI, Located in the Old Route of the Silver."; ?>

<?php include_once "include/head.php"; ?>
    <!-- Google Captcha v3 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>

    <?php include_once "include/nav.php"; ?>

    <!-- ESPACIO TOP -->
    <div class="space_top"></div>


    <!-- EVENTOS -->
    <section class="encabezado_hacienda text-center" id="encab_hacienda">
        <h3 class="subtitulo home__photo1">Contact</h3>
        <h2 class="tit_primero_red max-w900 home__photo3">EVERY DETAIL <br> TELLS MANY STORIES</h2>
    </section>

    <!-- FORMULARIO CONTACTO -->
    <section id="formulario_contacto" class="form_contacto">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 text-center">
                    <img class="img-fluid home__photo1" src="../Public/images/hotel-meson-real-de-plata-contacto.jpg" alt="">
                </div>
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-12 img_center">
                    <img class="img-fluid home__photo3" src="../Public/images/hotel-meson-real-de-plata-contacto2.jpg" alt="">
                    <div class="cont_txt_contacto home__photo5">
                        <p class="txt_general">*Prior reservation is mandatory. <br>
                                                **Adults only. <br>
                                                ***No pets allowed.
                        </p>
                        <p class="txt_general">Camino Real a Chichimequillas No. 1.
                            Col. Chichimequillas, El Marqués, Qro.
                            C.P. 76250</p>
                        <a class="item_link_contacto" href="tel:4227040532">(422) 704 0532</a>
                        <a class="item_link_contacto" href="mailto:contacto@mesonrealdeplata.com">contacto@mesonrealdeplata.com</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <h1 class="tit_primero home__photo1">Information</h1>
                    <!-- FORMULARIO -->
                    <form id="formulario" class="form_contacto home__photo3" method="post" action="">
                        <div class="row form_row1">
                            <div class="col-md-12">
                                <!-- Grupo: Nombre -->
                                <div class="formulario__grupo" id="grupo__nombre">
                                    <div class="formulario__grupo-input">
                                        <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Full name"> 
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">Full name can only contain letters.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row2">
                            <div class="col-md-6">
                                <!-- Grupo: Correo Electronico -->
                                <div class="formulario__grupo" id="grupo__correo">
                                    <div class="formulario__grupo-input">
                                        <input type="email" class="formulario__input" name="correo" id="correo" placeholder="e-mail">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">Email can only contain letters, numbers, periods, hyphens, and underscores.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Grupo: Teléfono -->
                                <div class="formulario__grupo" id="grupo__telefono">
                                    <div class="formulario__grupo-input">
                                        <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Contact Number">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">The phone number can only contain numbers and the minimum is 10 digits.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row3">
                            <div class="col-md-12">
                                <textarea class="formulario__input" name="mensaje" id="mensaje" placeholder="Message"></textarea>
                            </div>    
                        </div>
                        <div class="row form_row4">
                            <div class="col-md-12">
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Please fill out the form correctly.</p>
                                </div>
                                <div class="formulario__captcha" id="formulario__mensaje-captcha">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Captcha not verified. </p>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdFFaskAAAAADQBp94fda9eUj7O-00Tnv_pavu4"></div>
                                <input type="submit" value="Send">
                                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"><b>Form:</b> sent successfully!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MAPA REAL DE PLATA -->
    <section class="mapa_real_p">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2369.3634471874184!2d-100.34184595517439!3d20.757351944683318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35fbefbacb021%3A0x99185a1ee630f346!2sHotel%20Mes%C3%B3n%20Real%20de%20Plata!5e0!3m2!1ses-419!2smx!4v1676907072008!5m2!1ses-419!2smx" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <?php include_once "../Public/include/footer.php" ?>
    
    <script type="text/javascript" src="../Public/js/enFormContacto.js?ver=1.1.11"></script>

</body>
</html>