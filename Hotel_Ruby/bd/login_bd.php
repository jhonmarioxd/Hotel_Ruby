<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "hotel_el_ruby_db";

$conexion = mysqli_connect($host, $username, $password, $database);

// Se debe llamar a session_start() solo una vez al principio del script
if (isset($_POST['loguer'])) {
    $usuario = $_POST['Usuario'];
    $contrasena = $_POST['contrasena'];

    $Validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE Usuario = '$usuario' AND contrasena = '$contrasena'");

    if (mysqli_num_rows($Validar_login) > 0) {
        // Usuario autenticado correctamente
        $_SESSION['usuario'] = $usuario;
        header("Location: ../index.php");
        exit;
    } else {
        echo '<script>
            alert("Usuario no existe. Verifica los datos introducidos.");
            window.location.href="../login.php";
            </script>';
        exit;
    }
}
?>