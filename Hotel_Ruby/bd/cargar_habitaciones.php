<?php
// Conectar a la base de datos (reemplaza con tus credenciales)
$host = "localhost"; // Cambia esto a la dirección de tu servidor de base de datos si es diferente.
$username = "root";
$password = "";
$database = "hotel_el_ruby_db";

$conexion = mysqli_connect($host, $username, $password, $database);

// Consulta para obtener las habitaciones activas
$sql = "SELECT id, nombre_hb FROM habitaciones WHERE activado = 1"; // Solo selecciona habitaciones activas

$result = $conexion->query($sql);

$habitaciones = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $habitaciones[$row["id"]] = $row["nombre_hb"];
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Devolver los datos en formato JSON
echo json_encode($habitaciones);
