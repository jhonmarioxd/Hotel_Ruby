<?php
$host = "localhost"; // Cambia esto a la dirección de tu servidor de base de datos si es diferente.
$username = "root";
$password = "";
$database = "hotel_el_ruby_db";

$conexion = mysqli_connect($host, $username, $password, $database);

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$confirmar_contrasena = $_POST['confirmar_contraseña'];

// Inicializa el mensaje a mostrar en el popup
$popupMessage = "";

// Verificar si las contraseñas coinciden
if ($contrasena !== $confirmar_contrasena) {
    echo '
        <script>
        alert("La contraseña no coinciden intente otra vez");
        window.location.href="../login.php";
        </script>
        ';
} else {
    // Verificar si el usuario ya existe en la base de datos
    $checkQuery = "SELECT usuario, correo FROM usuario WHERE usuario = '$usuario' OR correo = '$correo'";
    $result = mysqli_query($conexion, $checkQuery);

    if ($result && mysqli_num_rows($result) > 0) {

        echo '
        <script>
        alert("El usuario ya existe porfavor ingrese otro.");
        window.location.href="../login.php";
        </script>
        ';
    } else {
        // Las contraseñas coinciden y el usuario no existe, puedes continuar con la inserción en la base de datos
        // Consulta SQL para insertar los datos
        $query = "INSERT INTO usuario(nombre_completo,correo,usuario,contrasena) VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

        if (mysqli_query($conexion, $query)) {
            echo '
            <script>
            alert("Registro exitoso. Puede iniciar sesión.");
            window.location.href="../login.php";
            </script>
            ';
        } else {
            echo '
        <script>
        alert("Hubo un error al registrar el usuario. Por favor, inténtalo de nuevo.");
        window.location.href="../login.php";
        </script>
        ';
        }
    }

    // Cierra el resultado de la consulta
    mysqli_free_result($result);

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);
}
// Muestra el popup con el mensaje adecuado
echo '<script>showPopup("' . $popupMessage . '");</script>';
