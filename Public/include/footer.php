    <!-- FOOTER -->
    <footer id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-2 cont_isotipo_foot">
                    <img class="img-fluid" src="<?php echo constant('URL') ?>Public/images/svg/isotipo-real-de-plata.svg" alt="">
                </div>
                <div class="col-md-5">
                    <ul class="list_foot">
                        <?php 
                            if(stristr($url_actual, 'en/') === FALSE){
                                echo '<a href="index.php" class="link_menu_foot">';
                                    echo '<li>Inicio</li>';
                                echo '</a>';
                                echo '<a href="hacienda.php" class="link_menu_foot">';
                                    echo '<li>Hacienda</li>';
                                echo '</a>';
                                echo '<a href="master-suite.php" class="link_menu_foot">';
                                    echo '<li>Habitaciones</li>';
                                echo '</a>';
                                echo '<a href="eventos.php" class="link_menu_foot">';
                                    echo '<li>Eventos</li>';
                                echo '</a>';
                                echo '<a href="contacto.php" class="link_menu_foot">';
                                    echo '<li>Contacto</li>';
                                echo '</a>';
                                echo '<a href="reservar.php" class="link_menu_foot">';
                                    echo '<li>Reservar</li>';
                                echo '</a>';
                            }else{
                                echo '<a href="index.php" class="link_menu_foot">';
                                    echo '<li>Home</li>';
                                echo '</a>';
                                echo '<a href="hacienda.php" class="link_menu_foot">';
                                    echo '<li>Hacienda</li>';
                                echo '</a>';
                                echo '<a href="master-suite.php" class="link_menu_foot">';
                                    echo '<li>Rooms</li>';
                                echo '</a>';
                                echo '<a href="contact.php" class="link_menu_foot">';
                                    echo '<li>Contact</li>';
                                echo '</a>';
                                echo '<a href="events.php" class="link_menu_foot">';
                                    echo '<li>Events</li>';
                                echo '</a>';
                                echo '<a href="book.php" class="link_menu_foot">';
                                    echo '<li>Book Now</li>';
                                echo '</a>';
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list_contact_foot">
                        <a href="mailto:contacto@mesonrealdeplata.com" class="link_contact_foot">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 20">
                                    <path class="icon_mail" d="M215.51-43.784H204.73a3.017,3.017,0,0,1-3.22-3.223V-60.564a3.014,3.014,0,0,1,3.223-3.22h21.557a3.011,3.011,0,0,1,3.22,3.22q0,6.842,0,13.683a2.971,2.971,0,0,1-2.232,2.985,3.792,3.792,0,0,1-.958.106Q220.912-43.777,215.51-43.784Zm0-18h-6.84c-1.364,0-2.727,0-4.091,0a1,1,0,0,0-1.047.8c-.1.462-.042.588.372.812q5.687,3.058,11.368,6.126a.471.471,0,0,0,.512-.017q2.646-1.432,5.3-2.859,3.087-1.663,6.179-3.324c.154-.084.258-.16.255-.37a1.044,1.044,0,0,0-1.17-1.173Zm-11.88,15.442a1.1,1.1,0,0,0,1.072.563q10.806-.008,21.615-.006a2.457,2.457,0,0,0,.249,0,.985.985,0,0,0,.82-.543.923.923,0,0,0-.1-.092q-4.578-3.2-9.153-6.415a.32.32,0,0,0-.392-.014c-.546.305-1.1.588-1.646.893a1.087,1.087,0,0,1-1.151,0c-.526-.3-1.067-.566-1.59-.865a.418.418,0,0,0-.526.034q-3.293,2.323-6.6,4.625Zm-.1-11.757v9.38l7.577-5.3Zm16.385,4.08,7.571,5.3V-58.1Z" transform="translate(-201.51 63.784)" fill="#fff"/>
                                </svg>
                                contacto@mesonrealdeplata.com
                            </li>
                        </a>
                        <a href="tel:4427040532" class="link_contact_foot">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28.138">
                                    <path class="icon_tel" d="M229.119-55.335a20.418,20.418,0,0,0,8.069,8.042c.232-.258.439-.514.673-.746.536-.533,1.064-1.079,1.636-1.573a2.646,2.646,0,0,1,3.631.034q2.067,1.969,4.025,4.049a2.733,2.733,0,0,1,.063,3.631c-.376.454-.806.866-1.218,1.289-.516.528-1.009,1.083-1.568,1.561A4.767,4.767,0,0,1,240.754-38a17.442,17.442,0,0,1-6.942-2.454,28.7,28.7,0,0,1-7.12-5.586,28.108,28.108,0,0,1-5.945-9.246,12.127,12.127,0,0,1-.869-3.96,4.775,4.775,0,0,1,1.31-3.648c.789-.8,1.549-1.641,2.4-2.377a2.735,2.735,0,0,1,4,.063c1.337,1.257,2.62,2.572,3.87,3.914a2.654,2.654,0,0,1,.019,3.593c-.666.758-1.4,1.45-2.111,2.172C229.307-55.47,229.232-55.424,229.119-55.335Zm12.052,15.672a3.235,3.235,0,0,0,2.541-1.006c.608-.639,1.235-1.264,1.851-1.9a3.39,3.39,0,0,0,.326-.372,1.148,1.148,0,0,0-.046-1.544c-.1-.118-.208-.232-.316-.34q-.988-.992-1.976-1.979c-.475-.473-.943-.953-1.426-1.416a1.115,1.115,0,0,0-1.641-.043c-.1.089-.2.186-.294.282-.666.666-1.33,1.334-2,2a1.277,1.277,0,0,1-1.6.263c-.405-.205-.813-.41-1.2-.644a20.917,20.917,0,0,1-4.667-3.875,16.774,16.774,0,0,1-3.084-4.387,1.425,1.425,0,0,1,.379-1.974c.7-.683,1.407-1.366,2.082-2.075a1.085,1.085,0,0,0,.022-1.617c-.075-.089-.154-.176-.236-.258q-1.647-1.65-3.294-3.3a1.251,1.251,0,0,0-2.041-.014c-.678.668-1.368,1.325-2.01,2.027a3.784,3.784,0,0,0-.741,1.129,4.783,4.783,0,0,0-.06,2.756,16.7,16.7,0,0,0,1.462,4.037A27.613,27.613,0,0,0,227.48-47.7a26.939,26.939,0,0,0,10.769,7.432A9.832,9.832,0,0,0,241.171-39.663Z" transform="translate(-219.875 66.111)" fill="#fff"/>
                                </svg>
                                (442) 704 0532
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list_social">
                        <a target="_blank" href="https://www.tripadvisor.com.mx/Hotel_Review-g479232-d15193365-Reviews-Meson_Real_De_Plata-Queretaro_City_Central_Mexico_and_Gulf_Coast.html" class="link_social_foot">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.087 11.752">
                                    <g transform="translate(211.982 -267.5)">
                                        <path d="M7.035,8.491c-.279.21-.538.436-.823.619A4.063,4.063,0,0,1,.862,3.163a.17.17,0,0,0,.013-.235C.621,2.536.376,2.14.127,1.743.1,1.7.077,1.659.041,1.6c.068,0,.119-.008.171-.008,1.02,0,2.041,0,3.061,0a.313.313,0,0,0,.19-.059A6.15,6.15,0,0,1,6.3.152a6.61,6.61,0,0,1,4.781.755c.285.165.532.394.8.585a.446.446,0,0,0,.236.092c1.036.007,2.07,0,3.1,0h.2c-.042.073-.068.12-.1.165-.26.417-.521.835-.787,1.248a.146.146,0,0,0,.009.2,3.918,3.918,0,0,1,.814,2.781,3.958,3.958,0,0,1-1.837,3.083,3.908,3.908,0,0,1-2.654.636A3.976,3.976,0,0,1,8.6,8.687c-.078-.069-.153-.144-.241-.226L7.692,10ZM8.142,5.654a3.169,3.169,0,1,0,3.181-3.163H11.3A3.177,3.177,0,0,0,8.142,5.654ZM.9,5.648A3.168,3.168,0,1,0,4.072,2.491h0A3.168,3.168,0,0,0,.9,5.648ZM4.849,1.659A4.141,4.141,0,0,1,7.7,3.8a4.078,4.078,0,0,1,2.878-2.142,5.551,5.551,0,0,0-2.86-.75A5.512,5.512,0,0,0,4.849,1.659ZM11.31,7.8a2.138,2.138,0,1,1,.007,0ZM10.072,5.632a1.24,1.24,0,1,0,2.48.042,1.239,1.239,0,0,0-1.218-1.256H11.3A1.248,1.248,0,0,0,10.072,5.632Zm-8.143.016A2.142,2.142,0,1,1,4.07,7.8,2.143,2.143,0,0,1,1.928,5.648Zm.9-.013A1.239,1.239,0,1,0,4.089,4.419H4.057A1.241,1.241,0,0,0,2.833,5.635Zm8.029.029a.472.472,0,1,1,.945-.009.47.47,0,0,1-.467.469h0A.472.472,0,0,1,10.862,5.665Zm-6.794.46A.47.47,0,0,1,3.6,5.656a.472.472,0,1,1,.472.469Z" transform="translate(-211.183 268)" fill="#fff"/>
                                        <path d="M7.692,11.252,6.834,9.281c-.113.086-.229.17-.352.249a4.446,4.446,0,0,1-2.4.694,4.558,4.558,0,0,1-3.74-7.2c-.158-.246-.314-.5-.466-.74L-.3,2.009c-.031-.05-.058-.1-.095-.162L-.8,1.132.019,1.1l.062,0c.041,0,.084,0,.131,0h1.53q.734,0,1.467,0A6.673,6.673,0,0,1,6.2-.338,7.9,7.9,0,0,1,7.769-.5a7.023,7.023,0,0,1,3.567.974,4.885,4.885,0,0,1,.565.4c.095.075.184.145.275.209h0c.592,0,1.175,0,1.62,0h2.493l-.461.8c-.026.046-.049.086-.075.127L15.7,2.1c-.2.323-.409.656-.619.984a4.385,4.385,0,0,1,.78,2.941,4.437,4.437,0,0,1-2.058,3.456,4.361,4.361,0,0,1-2.459.746,4.936,4.936,0,0,1-.525-.029,4.446,4.446,0,0,1-2.275-.908ZM7.24,7.709l.452,1.038.494-1.134.061.057A3.639,3.639,0,0,1,7.69,6.249a3.668,3.668,0,0,1-.748,1.685ZM11.3,2.991a2.668,2.668,0,0,0,.009,5.336h.018a2.668,2.668,0,0,0,0-5.336Zm-7.229,0a2.668,2.668,0,1,0,2.67,2.672A2.667,2.667,0,0,0,4.072,2.991l0-.5Zm8.054-.907a3.693,3.693,0,0,1,1.893,1.1.659.659,0,0,1,.105-.452c.138-.214.275-.43.41-.646H13.8C13.337,2.088,12.731,2.088,12.122,2.084Zm-11.189,0c.119.19.24.381.362.567a.682.682,0,0,1,.114.483A3.669,3.669,0,0,1,3.24,2.086q-.746,0-1.5,0Zm5.259-.474a4.534,4.534,0,0,1,1.5,1.263A4.543,4.543,0,0,1,8.6,1.985a4.429,4.429,0,0,1,.6-.379,5.638,5.638,0,0,0-3.011.008ZM11.317,8.3h-.009a2.651,2.651,0,0,1-2.64-2.64,2.649,2.649,0,0,1,2.645-2.646h.007a2.643,2.643,0,0,1,0,5.285ZM4.07,8.3A2.644,2.644,0,1,1,6.713,5.667,2.648,2.648,0,0,1,4.07,8.3Z" transform="translate(-211.183 268)" fill="rgba(0,0,0,0)"/>
                                    </g>
                                </svg>
                            </li>
                        </a>
                        <a target="_blank" href="https://instagram.com/mesonrealdeplata?igshid=YmMyMTA2M2Y=" class="link_social_foot">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10.985 11">
                                    <g transform="translate(188.5 -267.234)">
                                        <path d="M2.495,9.937A2.526,2.526,0,0,1,.045,7.446C-.018,5.832-.011,4.213.043,2.6A2.573,2.573,0,0,1,2.168.128c.2-.047.4-.085.606-.128H7.163a1.945,1.945,0,0,0,.26.066A2.639,2.639,0,0,1,9.917,2.407a.958.958,0,0,0,.068.179V7.44a.57.57,0,0,0-.065.136A2.567,2.567,0,0,1,7.342,9.948Q6.217,10,5.087,10,3.79,10,2.495,9.937ZM2.767.962A1.679,1.679,0,0,0,.957,2.685C.881,4.257.889,5.839.967,7.412A1.648,1.648,0,0,0,2.712,9.066c1.511.047,3.027.048,4.539,0A1.746,1.746,0,0,0,9.045,7.233c.033-.728.006-1.46.007-2.189s.027-1.488-.006-2.229A1.745,1.745,0,0,0,7.228.964Q6.124.924,5.018.925,3.891.925,2.767.962ZM2.407,5A2.576,2.576,0,1,1,4.993,7.59H4.985A2.6,2.6,0,0,1,2.407,5Zm.913-.006A1.669,1.669,0,1,0,5.006,3.352H4.994A1.652,1.652,0,0,0,3.32,4.994ZM7.076,2.345a.6.6,0,0,1,.58-.611.606.606,0,0,1,.606.589.593.593,0,0,1-.585.605H7.666A.581.581,0,0,1,7.076,2.345Z" transform="translate(-188 267.734)" fill="#fff"/>
                                        <path d="M5.087,10.5c-.849,0-1.729-.021-2.616-.064A3.031,3.031,0,0,1-.454,7.465c-.06-1.539-.061-3.136,0-4.882A3.073,3.073,0,0,1,2.055-.359c.14-.033.28-.061.416-.089l.2-.041L2.722-.5H7.23l.064.017.087.025a.886.886,0,0,0,.106.028,3.132,3.132,0,0,1,2.92,2.73l.011.024c.011.025.023.05.033.076l.036.089V7.56l-.055.107c-.009.018-.019.035-.029.053a3.056,3.056,0,0,1-3.036,2.727C6.625,10.482,5.858,10.5,5.087,10.5Zm-.07-9.075c-.725,0-1.477.012-2.234.037A1.19,1.19,0,0,0,1.456,2.709c-.072,1.5-.069,3.076.01,4.678a1.158,1.158,0,0,0,1.262,1.18C3.485,8.59,4.25,8.6,5,8.6S6.5,8.59,7.236,8.567A1.261,1.261,0,0,0,8.545,7.21c.022-.484.017-.985.012-1.47,0-.228,0-.464,0-.7s0-.466.005-.693c.005-.452.01-.918-.006-1.373a1.1,1.1,0,0,1-.865.452H7.62A3.078,3.078,0,0,1,4.995,8.09h-.01A3.1,3.1,0,0,1,1.907,5,3.093,3.093,0,0,1,4.978,1.936h.008a3.044,3.044,0,0,1,1.59.444c0-.009,0-.018,0-.028a1.11,1.11,0,0,1,.436-.895c-.65-.021-1.32-.032-1.994-.032ZM4.994,3.852a1.161,1.161,0,1,0-.023,2.322h.013A1.161,1.161,0,0,0,6.157,5.025,1.144,1.144,0,0,0,5.83,4.2,1.161,1.161,0,0,0,5,3.852Z" transform="translate(-188 267.734)" fill="rgba(0,0,0,0)"/>
                                    </g>
                                </svg>
                            </li>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/HotelRealdePlata?mibextid=ZbWKwL" class="link_social_foot">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.157 10">
                                    <path d="M1138.4,3575.748l.308.112v1.518c-.4.026-.788.054-1.174.076a.6.6,0,0,0-.609.634c-.025.427-.005.856-.005,1.326h1.742c-.071.581-.129,1.12-.214,1.652-.01.062-.175.135-.271.139-.4.015-.808.006-1.249.006v4.538h-1.856v-4.529h-1.52v-1.779h1.535c0-.555-.01-1.058,0-1.561a2.053,2.053,0,0,1,1.722-2.074.358.358,0,0,0,.1-.057Z" transform="translate(-1133.552 -3575.748)" fill="#fff"/>
                                </svg>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="legales">
                            
                <?php 
                    if(stristr($url_actual, 'en/') === FALSE){
                        echo '<p class="txt_general_bn">® 2023,  Derechos Reservados</p>';
                        echo '<a href="aviso-privacidad.php" class="txt_general_bn">Aviso de privacidad</a>';
                        echo '<a href="terminos-condiciones.php" class="txt_general_bn">Términos y condiciones</a>';
                        echo '<a href="politicas-cancelacion.php" class="txt_general_bn">Políticas de cancelación</a>';
                    }else{
                        echo '<p class="txt_general_bn">® 2023,  All rights reserved</p>';
                        echo '<a href="../aviso-privacidad.php" class="txt_general_bn">Privacy Notice</a>';
                        echo '<a href="../politicas-cancelacion.php" class="txt_general_bn">Cancellation policies</a>';
                    }
                ?>

            </div>
        </div>
    </footer>

    <!-- JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('URL') ?>Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo constant('URL') ?>Public/js/main.js?ver=1.2.22"></script>

    <!-- SCROLL REVEAL -->
    <script type="text/javascript" src="<?php echo constant('URL') ?>Public/js/scrollReveal.min.js"></script>