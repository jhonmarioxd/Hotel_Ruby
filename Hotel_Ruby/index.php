<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El hotel El Ruby tiene una gran hospitalidad y una excelente atención al cliente.">
    <title>Hotel El Ruby</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/global-header.css">
    <link rel="stylesheet" href="./assets/css/global-footer.css">
    <link rel="stylesheet" href="./assets/css/accesibility.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="shortcut icon" href="./assets/logo/logo2.png" type="image/x-icon">
</head>

<body class="scroll-bar">
    <div id="loader">
        <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
            <path fill="#d4af37" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite" />
            </path>
        </svg>
    </div>
    <header>
        <div class="header-container">
            <nav class="header-nav-bar">
                <div class="header-nav-logo">
                    <a href="index.php">
                        <img width="300px" height="auto" src="./assets/logo/logo del hotel.png" type="image/x-icon" alt="hotel el ruby">
                    </a>
                </div>
                <ul class="header-nav-lists">
                    <li class="header-nav-list">
                        <a class="header-nav-link header-active" href="index.php">Hogar</a>
                    </li>
                    <li class="header-nav-list"><a class="header-nav-link" href="rooms-and-suites.php">Habitaciones y Suites</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="facilities.php">Instalaciones</a></li>
                    <!--<li class="header-nav-list"><a class="header-nav-link" href="contact-page.html">Contacto Us</a></li>-->
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="reservar.php">Reserva Ahora </a></li>
                    <!-- <a href="login.php"><img style="width: auto; height: 40px; padding-bottom: 10px ;" src="assets/img/1077114.png" alt="login and register"></a> -->
                    <?php
                    session_start();
                    if (isset($_SESSION['usuario'])) {
                        // Mostrar el enlace solo si el usuario no ha iniciado sesión
                        echo '<li class="header-nav-list"><a href="./bd/cerrar_sesion.php" class="header-btn header-btn-custom">Cerrar seccion</a></li>';
                    }
                    ?>
                    <?php
                    // Verifica si el usuario ha iniciado sesión
                    if (!isset($_SESSION['usuario'])) {
                        // Mostrar el enlace solo si el usuario no ha iniciado sesión
                        echo '<a href="login.php"><img style="width: auto; height: 40px; padding-bottom: 10px ;" src="assets/img/1077114.png" alt="login and register"></a>';
                    }
                    ?>
                </ul>
                <div class="header-hamburger-icon">
                    <div class="header-hamburger-line-1"></div>
                    <div class="header-hamburger-line-2"></div>
                    <div class="header-hamburger-line-3"></div>
                </div>
            </nav>
        </div>
    </header>

    <div class="jumbotron-container">
        <div class="jumbotron-left">
            <h2 class="jumbotron-header">Descubre el equilibrio perfecto <br> de hospitalidad, lujo y <br>comodidad.</h2>
            <p>Estamos enfocados en proporcionar a los clientes el más alto nivel<br> comodidad y ofrecemos tarifas asequibles</p>
        </div>
    </div>
    <!-- Enjoy your stay in our hotel -->
    <div class="enjoy-container">
        <div class="enjoy-header">
            <h2 class="enjoy-heading">Disfruta tu estancia <br>en nuestro hotel</h2>
            <hr class="horizontal">
            <p>Somos más que un hotel porque somos capaces<br> combinar el estándar de calidad de un hotel con la<br> ventajas de un hospedaje confortable.</p>
        </div>
        <div class="enjoy-services">
            <div class="first-col">
                <div class="upper">
                    <span>
                        <img width="40px" height="auto" src="./assets/img/clock.png" alt="clock icon" class="enjoy__clock-icon">
                    </span>
                    <h3>Servicio de habitaciones 24 horas</h3>
                    <p>Tienes acceso al servicio de habitaciones las 24 horas del día en nuestro hotel.</p>
                </div>
                <div class="lower">
                    <span>
                        <img width="40px" height="auto" src="./assets/img/database.png" alt="fitness icon" class="enjoy__fitness-icon">
                    </span>
                    <h3>piscinas y habitaciones confortables</h3>
                    <p>El acceso al piscina es parte de nuestro paquete de hotel cuando realiza una reserva.</p>
                </div>

            </div>
            <div class="sec-col">
                <div class="upper">
                    <span>
                        <img width="40px" height="auto" src="./assets/img/clock.png" alt="coffee icon" class="enjoy__coffee-icon">
                    </span>
                    <h3>Restaurante</h3>
                    <p>Tienes acceso a los restaurantes de última generación en nuestro hotel.</p>
                </div>
                <div class="lower">
                    <span>
                        <img width="40px" height="auto" src="./assets/img/wifi.png" alt="wifi icon" class="enjoy__wifi-icon">
                    </span>
                    <h3>Acceso Wi-Fi gratuito</h3>
                    <p>Tiene acceso a servicios de Wi-Fi gratuitos las 24 horas.</p>
                </div>
            </div>
            <div class="video-sx">
                <video controls class="border-video" width="100%" height="auto">
                    <source src="./assets/videos/10000000_331232238162345_7527287339239002811_n.mp4" type="video/mp4">
                </video>
            </div>
            <!--<img src="..//imgenes/videos/10000000_331232238162345_7527287339239002811_n.mp4" type="video/mp4" alt="women in swimming pool" class="third-col-video">-->
        </div>
    </div>

    </div>
    <section class="special-offers">
        <!-- Top Text -->
        <div class="page-header-container">

            <h2 class="page-header">Ven y disfruta de nuestras confortables <br>habitaciones</h2>


        </div>
        <div class="row center-lg">
            <div class="col image-col right-marg">
                <img src="./assets/habitaciones e instalaciones/269906225_332747272185385_2903575361492489064_n.jpg" alt="room-image" class="small-image">
                <img src="./assets/habitaciones e instalaciones/20031690_1991793217721671_3559146115283967244_n.jpg" alt="room-image" class="small-image">
                <img src="./assets/habitaciones e instalaciones/263599402_320101160116663_8865088752819283339_n.jpg" alt="room-image" class="small-image img-hide">
                <div class="side-by-side-container">
                    <div class="large-image-container">
                        <img src="./assets/habitaciones e instalaciones/59870784_2397914190442903_6242255302788382720_n.jpg" alt="room-image-large" class="large-image">
                    </div>
                    <section class="stacked-image-container">
                        <div><img src="./assets/habitaciones e instalaciones/285496298_446120470848064_2195770567369364133_n.jpg" alt="room-image" class="small-image"></div>
                        <div><img src="./assets/habitaciones e instalaciones/269814251_330044932455619_6132515414850091291_n.jpg" alt="room-image" class="small-image"></div>
                    </section>
                </div>
            </div>
            <div class="col">
                <p class="offers-sub-title">
                    El hecho de que estemos dirigidos por profesionales de la hostelería<br>y equipado con los mejores diseñadores de interiores del mundo<br> es por eso que nuestras habitaciones y suites son insuperables en <br>el universo
                </p>
                <ul class="offers-list">
                    <li>
                        <div>
                            <img width="17px" height="auto" src="assets/img/check-square.png" alt="tick" class="list-icon">
                            <p class="list-text">Habitación ruby</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img width="17px" height="auto" src="assets/img/check-square.png" alt="tick" class="list-icon">
                            <p class="list-text">Habitación CIELO</p>
                        </div>
                    </li>

                </ul>
                <a href="../HOTEL_EL_RUBY/rooms-and-suites.php" class="btn btn-fill btn-large centered">Reservar ahora</a>
            </div>
        </div>
    </section>
    <!-- Bottom bar -->
    <footer class="footer">
        <div class="footer-container">
            <nav class="footer-nav">
                <div class="footer-description">
                    <h3 class="footer-description-title">HOTEL El RUBY</h3>
                    <p>La hospitalidad y la comodidad son nuestra prioridad.</p>
                </div>
                <div class="footer-contact-us">
                    <h3 class="footer-description-title">Contactos</h3>
                    <p class="footer-description-detail">
                        <img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="Hotel El Ruby">
                        <span>Vereda, La Victoria, Villavieja, Huila</span>
                    </p>
                    <p class="footer-description-detail">
                        <img src="./assets/img/phone.svg" class="footer-description-icon" alt="Hotel El Ruby">
                        <span>3185748804</span>
                    </p>
                    <p class="footer-description-detail">
                        <img src="./assets/img/mail.svg" class="footer-description-icon" alt="Hotel El Ruby">
                        <span>support@starhotels.com</span>
                    </p>
                </div>
                <div class="footer-follow-us">
                    <h3 class="footer-description-title">Redes sociales</h3>
                    <ul class="footer-follow-us-lists">
                        <li class="follow-us-list">
                            <a href="https://www.facebook.com/profile.php?id=100063503445941">
                                <img src="./assets/img/facebook.svg" alt="Hotel El Ruby en Facebook">
                            </a>
                        </li>
                        <li class="follow-us-list">
                            <a href="https://www.instagram.com/hotelelruby/">
                                <img src="./assets/img/instagram.svg" alt="Hotel El Ruby en Instagram">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mapa-hotel">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.9857066976315!2d-75.17364042412567!3d3.3536404518597136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3bedf61aa8128d%3A0xbe812cff07c2bf92!2sHostal%20El%20Ruby!5e0!3m2!1ses!2sco!4v1683844836157!5m2!1ses!2sco" style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.658); border-radius: 50px; box-shadow: 100px;" allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
                </div>
            </nav>
        </div>
    </footer>
    <script defer async>
        (() => {
            const loader = document.getElementById('loader');
            const scrollBar = document.getElementsByClassName('scroll-bar')[0];
            window.addEventListener('load', () => {
                loader.classList.add('none');
                scrollBar.classList.remove('scroll-bar')
            });
        })();
    </script>
    <script defer async src="assets/js/toggleHamburger.js"></script>
    <script src="assets/js/login-register.js"></script>
</body>

</html>