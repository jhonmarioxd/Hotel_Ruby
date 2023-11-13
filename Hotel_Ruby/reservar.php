<?php 
session_start();
if (empty($_SESSION['usuario'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El hotel el ruby tiene una gran hospitalidad y gran atencion al cliente.">
    <title>Hotel El Ruby</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/global-header.css">
    <link rel="stylesheet" href="./assets/css/global-footer.css">
    <link rel="stylesheet" href="./assets/css/accesibility.css">
    <link rel="stylesheet" href="./assets/css/reservas.css">
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
                    <li class="header-nav-list"><a class="header-nav-link" href="rooms-and-suites.php">Habitaciones y Suites</a></li>
                    <li class="header-nav-list"><a class="header-nav-link" href="facilities.php">Instalaciones</a></li>
                    <!--<li class="header-nav-list"><a class="header-nav-link" href="contact-page.html">Contacto Us</a></li>-->
                    <li class="header-nav-list"><a class="header-btn header-btn-custom" href="reservar.php">Reserva Ahora </a></li>
                    <!-- <a href="login.php"><img style="width: auto; height: 40px; padding-bottom: 10px ;" src="assets/img/1077114.png" alt="login and register"></a> -->
                    <?php
                    /* session_start(); */
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

    <div id="container_2">
        <!--<nav >
            <div class="logo-container">
                <img src="..//imgenes/logo/logo del hotel.png" type="image/x-icon" alt="hotel el ruby" class="invert-color">
            </div>
        </nav>-->
        <div class="reservation-container">
            <form action="./bd/procesar_reserva.php" method="post">
                <h2>RESERVA AHORA</h2>
                <div id="colums">
                    <li>
                        <label for="nombre">Nombre:</label><br>
                        <input type="text" name="nombre" id="nombre" required><br>
                    </li>
                    <li>
                        <label for="email">Email:</label><br>
                        <input type="text" name="email" id="email" required><br>
                    </li>
                    <li>
                        <label for="telefono">Teléfono:</label><br>
                        <input type="tel" name="telefono" id="telefono" required><br>
                    </li>
                    <li>
                        <label for="fecha_llegada">Fecha de llegada:</label><br>
                        <input type="date" name="fecha_llegada" id="fecha_llegada" required><br>
                    </li>
                    <li>
                        <label for="fecha_salida">Fecha de salida:</label><br>
                        <input type="date" name="fecha_salida" id="fecha_salida" required><br>
                    </li>
                    <li class="habitacion">
                        <!--seleccionador de habitaciones-->
                        <label for="habitacion">Número de habitación:</label><br>
                    </li>
                    <select name="habitacion" id="habitacion" required>
                        <option value="" disabled selected>Seleccione una habitación</option>
                    </select>
                    <br>
                    <li>
                        <label for="personas">Cantidad de personas:</label><br>
                        <input type="number" name="personas" id="personas" required><br>
                    </li>
                </div>
                <button type="submit">Reservar</button>
            </form>
        </div>
    </div>


    <!--bottom bar-->
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
    <div class="background1">
        <img src="assets/img/desierto-de-la-tatacoa (1).png" alt="fondo">
    </div>
    <!-- proceso sacar datos mediante php-->
    <script>
        // Función para cargar las habitaciones desde el archivo PHP
        function cargarHabitaciones() {
            fetch('bd/cargar_habitaciones.php')
                .then(response => response.json())
                .then(data => {
                    const selectHabitacion = document.getElementById('habitacion');
                    for (const id in data) {
                        const option = document.createElement('option');
                        option.value = id;
                        option.textContent = data[id];
                        selectHabitacion.appendChild(option);
                    }
                })
                .catch(error => console.error('Error al cargar habitaciones: ' + error));
        }

        // Llama a la función para cargar las habitaciones cuando la página se carga
        window.addEventListener('DOMContentLoaded', cargarHabitaciones);
    </script>

    <script>
        function configurarFechas() {
            const fechaLlegadaInput = document.getElementById("fecha_llegada");
            const fechaSalidaInput = document.getElementById("fecha_salida");
            const fechaActual = obtenerFechaActual();

            fechaLlegadaInput.addEventListener("change", function() {
                const fechaLlegada = fechaLlegadaInput.value;
                if (fechaLlegada >= fechaActual) {
                    fechaSalidaInput.setAttribute("min", fechaLlegada);
                    fechaSalidaInput.style.backgroundColor = ""; // Limpiar el fondo de color
                } else {
                    alert("La fecha de llegada debe ser posterior a la fecha actual.");
                    fechaLlegadaInput.value = fechaActual; // Restaurar la fecha actual
                }
                validarFechaSalida();
            });

            fechaSalidaInput.addEventListener("change", function() {
                validarFechaSalida();
            });
        }

        function validarFechaSalida() {
            const fechaLlegadaInput = document.getElementById("fecha_llegada");
            const fechaSalidaInput = document.getElementById("fecha_salida");
            const fechaLlegada = new Date(fechaLlegadaInput.value);
            const fechaSalida = new Date(fechaSalidaInput.value);

            if (fechaSalida == fechaLlegada || fechaSalida == new Date()) {
                alert("La fecha de salida debe ser posterior a la fecha de llegada y a la fecha actual.");
                fechaSalidaInput.value = ""; // Limpiar el campo de fecha de salida
            }
        }

        function obtenerFechaActual() {
            const fechaActual = new Date();
            const year = fechaActual.getFullYear();
            const month = String(fechaActual.getMonth() + 1).padStart(2, '0');
            const day = String(fechaActual.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        window.addEventListener('DOMContentLoaded', configurarFechas);
    </script>

    <script defer async>
        (() => {
            const loader = document.getElementById('loader');
            const scrollBar = document.getElementsByClassName('scroll-bar')[0];
            window.addEventListener('load', () => {
                scrollBar.classList.remove('scroll-bar')
            });
        })();
    </script>
    <script defer async src="assets/js/toggleHamburger.js"></script>
</body>

</html>