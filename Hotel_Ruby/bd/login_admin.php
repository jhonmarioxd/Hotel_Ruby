<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "hotel_el_ruby_db";

$conexion = mysqli_connect($host, $username, $password, $database);

if (isset($_POST['loguer_AD'])) {
    $usuario_AD = $_POST['Usuario_AD'];
    $contrasena_AD = $_POST['contrasena_AD'];

    $Validar_login = mysqli_query($conexion, "SELECT * FROM usuario_ad WHERE Usuario_Ad = '$usuario_AD' AND contrasena_AD = '$contrasena_AD'");

    if ($Validar_login && mysqli_num_rows($Validar_login) > 0) {
        // Usuario autenticado correctamente
        $_SESSION['usuario_AD'] = $usuario_AD;
        header("Location: ../Admin.php");
        exit;
    } else {
        echo '<script>
            alert("Usuario no existe. Verifica los datos introducidos.");
            window.location.href="../Login_AD.php";
            </script>';
        exit;
    }
}
