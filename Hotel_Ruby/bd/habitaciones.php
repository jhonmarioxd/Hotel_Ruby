<?php
$host = "localhost"; // Cambia esto a la dirección de tu servidor de base de datos si es diferente.
$username = "root";
$password = "";
$database = "hotel_el_ruby_db";

$conexion = mysqli_connect($host, $username, $password, $database);

// Consulta para obtener datos de la tabla de habitaciones
$sql = "SELECT * FROM habitaciones";
$result = $conexion->query($sql);

$habitaciones = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $habitaciones[] = $row;
    }
}

$conexion->close();
?>

<!-- Formato HTML para mostrar las habitaciones -->
<div class="row">
    <?php foreach ($habitaciones as $habitacion) : ?>
        <div class="room-col" style=" max-width: 250px; max-height: 500px; margin: 20px; ">
            <div class="room-card">
                <img src="<?php echo $habitacion['imagenes_hb']; ?>" alt="" class="room-img">
                <h3 class="room-title"><?php echo $habitacion['nombre_hb']; ?></h3>
                <p class="room-text"><?php echo $habitacion['descripcion_hb']; ?></p>
                <div class="room-details">
                    <div class="detail">
                        <img style="width: auto; height: 20px; " src="assets/img/1077114.png" alt="  " class="detail-icon">
                        <p class="detail-text"><?php echo $habitacion['n_personas_hb']; ?> Personas</p><br>
                    </div>
                    <div class="detail">
                        <img src="assets/img/bed.png" alt="" class="detail-icon">
                        <p class="detail-text"><?php echo $habitacion['n_camas_hb']; ?></p><br>
                    </div>
                </div>
                <p class="amount-text">Precio: $<?php echo $habitacion['precio_hb']; ?> Por persona</p><br>
                <a href="#" class="btn btn-fill">Ver Más</a>
                <a href="reservar.php" class="btn btn-fill">Reservar Ahora</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>