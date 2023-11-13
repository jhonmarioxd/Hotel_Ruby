<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel El Ruby</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/global-header.css">
    <link rel="stylesheet" href="./assets/css/global-footer.css">
    <link rel="stylesheet" href="./assets/css/rooms-and-suites.css">
    <link rel="shortcut icon" href="./assets/logo/logo2.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body class="scroll-bar">
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
                        <a class="header-nav-link" href="index.php">Hogar</a>
                    </li>
                    <li class="header-nav-list"><a class="header-nav-link header-active" class="header-nav-link" href="rooms-and-suites.php">Habitaciones y Suites</a></li>
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
    </header>

    <main>
        <div class="container ">
            <!-- Top Text -->
            <div class="page-header-container ">
                <h2 class="page-header ">Hotel El Ruby</h2>
                <hr />
                <p class="page-sub-header ">
                    Aproveche al máximo las ofertas de nuestro hotel. Disfruta de lo moderno <br> comodidad y vista panorámica
                </p>
            </div>

            <!-- Special offers section -->
            <section class="special-offers ">
                <div class="row center-lg ">
                    <div class="col image-col right-marg ">
                        <img src="./assets/habitaciones e instalaciones/285496298_446120470848064_2195770567369364133_n.jpg" alt="room-image " class="small-image ">
                        <img src="./assets/habitaciones e instalaciones/20031690_1991793217721671_3559146115283967244_n.jpg " alt="room-image " class="small-image ">
                        <img src="./assets/habitaciones e instalaciones/269814251_330044932455619_6132515414850091291_n.jpg" alt="room-image " class="small-image ">
                        <div class="side-by-side-container ">
                            <div class="large-image-container ">
                                <img src="./assets/habitaciones e instalaciones/269814251_330044932455619_6132515414850091291_n.jpg" alt="room-image-large " class="large-image ">
                            </div>
                            <section class="stacked-image-container ">
                                <div><img src="./assets/habitaciones e instalaciones/269906225_332747272185385_2903575361492489064_n.jpg" alt="room-image " class="small-image "></div>
                                <div><img src="./assets/habitaciones e instalaciones/59870784_2397914190442903_6242255302788382720_n.jpg" alt="room-image " class="small-image "></div>
                            </section>
                        </div>
                    </div>
                    <div class="col ">
                        <h3 class="offers-title ">Ven y disfruta</h3>
                        <p class="offers-sub-title ">
                            disfruta de nuestro hotel con la mayor <br>atencion y todos los servicios incluidos
                        </p>
                        <ul class="offers-list ">
                            <li>
                                <div>
                                    <img src="assets/img/check-square.png " alt="tick " class="list-icon ">
                                    <p class="list-text ">Servicio gratuito de wifi</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/img/check-square.png " alt="tick " class="list-icon ">
                                    <p class="list-text ">Mejor tarifa garantizada</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="assets/img/check-square.png " alt="tick " class="list-icon ">
                                    <p class="list-text ">Acceso gratuito a DSTV</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- habitaciones -->
            <section class="rooms-section">
                <div class="container">
                    <div class="row">
                        <div class="row room-section-header-container ">
                            <div class="col col-3 ">
                                <h4 class="room-section-header active-header " id="standard-room ">Habitaciones</h4>
                            </div>
                            <!-- Incluye el archivo PHP que muestra las habitaciones -->
                            <?php include('bd/habitaciones.php'); ?>
                        </div>
                    </div>
                </div>
            </section>


        </div>

    </main>

    <footer class="footer">
        <div class="footer-container">
            <nav class="footer-nav">
                <div class="footer-description">
                    <h3 class="footer-description-title">HOTEL El RUBY</h3>
                    <p>La Hospitalidad y Comodidad son nuestra prioridad</p>
                </div>
                <div class="footer-contact-us">
                    <h3 class="footer-description-title">Contactos</h3>
                    <p class="footer-description-detail">
                        <img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="hotel el ruby contacs">

                        <span>Vereda, La Victoria, Villavieja, Huila</span>
                    </p>
                    <p class="footer-description-detail">
                        <img src="./assets/img/phone.svg" class="footer-description-icon" alt="hotel el ruby phone">
                        <span>
                            3133756050</span>
                    </p>
                    <p class="footer-description-detail">
                        <img src="./assets/img/mail.svg" class="footer-description-icon" alt="hotel el ruby email">
                        <span>support@starhotels.com</span>
                    </p>
                </div>
                <div class="footer-follow-us">
                    <h3 class="footer-description-title">Redes sociales</h3>
                    <ul class="footer-follow-us-lists">
                        <li class="follow-us-list">
                            <a href="https://www.facebook.com/profile.php?id=100063503445941">
                                <img src="./assets/img/facebook.svg" alt="hoel el ruby facebook">
                            </a>
                        </li>
                        <li class="follow-us-list">
                            <a href="https://www.instagram.com/hotelelruby/">
                                <img src="./assets/img/instagram.svg" alt="hotel el ruby instagram">
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
    <script src="assets/js/switchRooms.js "></script>
    <script src="assets/js/toggleHamburger.js "></script>
</body>

</html>