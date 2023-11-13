<?php
session_start();
if (empty($_SESSION['usuario_AD'])) {
    header("location: login.php");
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administrar habitaciones">
    <title>Administrar Habitaciones - Hotel El Ruby</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/global-header.css">
    <link rel="stylesheet" href="./assets/css/global-footer.css">
    <link rel="stylesheet" href="./assets/css/accesibility.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="shortcut icon" href="./assets/logo/logo2.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body class="scroll-bar">
    <header>
        <div class="header-container">
            <nav class="header-nav-bar">
                <div class="header-nav-logo">
                    <a href="index.php">
                        <img width="300px" height="auto" src="./assets/logo/logo del hotel.png" alt="hotel el ruby">
                    </a>
                </div>
                <ul class="header-nav-lists">
                    <li class="header-nav-list">
                        <a class="header-nav-link" href="index.php">Hogar</a>
                    </li>
                    <li class="header-nav-list"><a class="header-nav-link" href="rooms-and-suites.php">Habitaciones y Suites</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="facilities.php">Instalaciones</a></li>
                    <!--<li class="header-nav-list"><a class="header-nav-link" href="contact-page.html">Contacto Us</a></li>-->
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="reservar.php">Reserva Ahora </a></li>
                    <!-- <a href="login.php"><img style="width: auto; height: 40px; padding-bottom: 10px ;" src="assets/img/1077114.png" alt="login and register"></a> -->
                    <li class="header-nav-list"><a href="./bd/cerrar_sesion.php" class="header-btn header-btn-custom">Cerrar seccion</a></li>
                    <?php
                    // Verifica si el usuario ha iniciado sesión
                    if (!isset($_SESSION['usuario_AD'])) {
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
    <div class="div_1">Control de Habitaciones</div>
    <div class="div_2">
        <?php include 'bd/tabla.php'; ?>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <nav class="footer-nav">
                <div class="footer-description">
                    <h3 class="footer-description-title">HOTEL El RUBY</h3>
                    <p>Hospitalidad y Comodidad son nuestras consignas</p>
                </div>
                <div class="footer-contact-us">
                    <h3 class="footer-description-title">Contactos</h3>
                    <p class="footer-description-detail">
                        <img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="hotel el ruby location">
                        <span>Vereda, La Victoria, Villavieja, Huila</span>
                    </p>
                    <p class="footer-description-detail">
                        <img src="./assets/img/phone.svg" class="footer-description-icon" alt="hotel el ruby phone">
                        <span>3185748804</span>
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
                        <li class "follow-us-list">
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
    <script defer async src="assets/js/toggleHamburger.js"></script>
    <script src="assets/js/Private_pagina.js"></script>
</body>

</html>