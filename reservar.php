    <?php $title = "Reservar - Mesón Real De Plata"; ?>
    <?php $description = "Vive una estancia completamente placentera, fuera de la ciudad y en un inigualable entorno histórico y campirano. Patrimonio de la humanidad que data del s. XVI, Ubicada en La Antigua Ruta De La Plata."; ?>

    <?php include_once "Public/include/head.php"; ?>
    <!-- Google Captcha v3 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <?php include_once "Public/include/nav.php"; ?>

    <!-- ESPACIO TOP -->
    <div class="space_top"></div>


    <!-- EVENTOS -->
    <section class="encabezado_reserva text-center" id="encab_reserva">
        <h3 class="subtitulo home__photo1">Contacto</h3>
        <h2 class="tit_primero_red max-w900 home__photo3">Informes</h2>
    </section>

    <!-- FORMULARIO CONTACTO -->
    <section id="formulario_contacto" class="form_contacto home__photo5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 offset-sm-0">
                    <!-- FORMULARIO -->
                    <form id="reservar" class="form_contacto" action="" method="post">
                        <div class="row form_row2">
                            <div class="col-md-6">
                                <!-- Grupo: Fecha del evento -->
                                <div class="formulario__grupo" id="grupo__fechaLlegada">
                                    <div class="formulario__grupo-input item_form_date">
                                        <input type="text" name="fechaLlegada" id="fechaLlegada" placeholder="Fecha del evento" onfocus="(this.type='date')" onblur="(this.type='date')" required>
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Grupo: Motivo de visita -->
                                <div class="formulario__grupo" id="grupo__motivoVisita">
                                    <div class="formulario__grupo-input">
                                        <!-- <img src="Public/images/svg/icon-motivo.svg" alt=""> -->
                                        <input class="formulario__input" type="text" name="motivoVisita" id="motivoVisita" placeholder="Tipo de evento" required>
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El tipo de evento solo puede contener letras y espacios.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row2">
                            <div class="col-md-6">
                                <!-- Grupo: Teléfono -->
                                <div class="formulario__grupo" id="grupo__select">
                                    <div class="formulario__grupo-input">
                                        <select name="selectMotivo" id="selectMotivo" disabled>
                                            <option value="">Motivo de su visita</option>
                                            <option value="evento"  selected>Evento</option>
                                        </select>
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El número de teléfono solo puede contener números y el mínimo son 10 dígitos.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Grupo: Correo Electronico -->
                                <div class="formulario__grupo" id="grupo__numPersonas">
                                    <div class="formulario__grupo-input">
                                        <input type="number" name="numPersonas" id="numPersonas" placeholder="No. de personas" required>
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El número de personas solo puede tener números.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row2">
                            <div class="col-md-6">
                                <!-- Grupo: Fecha de llegada -->
                                <div class="formulario__grupo" id="grupo__nombre">
                                    <div class="formulario__grupo-input">
                                        <input type="text" name="nombre" id="nombre" placeholder="Nombre completo" required>
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El nombre completo solo puede contener letras y espacios.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Grupo: Fecha de salida -->
                                <div class="formulario__grupo" id="grupo__telefono">
                                    <div class="formulario__grupo-input">
                                    <input type="text" name="telefono" id="telefono" placeholder="Tel. / Cel." required>
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="formulario__input-error">El número de teléfono solo puede contener números y el mínimo son 10 dígitos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row form_row3">
                            <div class="col-md-12">
                                <textarea class="formulario__input" name="mensaje" id="mensaje" placeholder="Platícanos de tu evento"></textarea>
                            </div>    
                        </div>
                        <div class="row form_row4">
                            <div class="col-md-12">
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llena el formulario correctamente. </p>
                                </div>
                                <div class="formulario__captcha" id="formulario__mensaje-captcha">
                                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Captcha no verificado. </p>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdFFaskAAAAADQBp94fda9eUj7O-00Tnv_pavu4"></div>
                                <input type="submit" value="Enviar">
                                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito"><b>Formulario:</b> Enviado exitosamente!</p>
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

    <?php include_once "Public/include/footer.php"; ?>

    <script type="text/javascript" src="Public/js/form_reservar.js?ver=1.1.13"></script>
</body>
</html>