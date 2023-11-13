    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los datos enviados por el formulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $fecha_llegada = $_POST["fecha_llegada"];
        $fecha_salida = $_POST["fecha_salida"];
        $habitacion = $_POST["habitacion"];
        $personas = $_POST["personas"];

        // Conectar a la base de datos (reemplaza con tus credenciales)

        $host = "localhost"; // Cambia esto a la dirección de tu servidor de base de datos si es diferente.
        $username = "root";
        $password = "";
        $database = "hotel_el_ruby_db";

        $conexion = mysqli_connect($host, $username, $password, $database);

        // Consulta para obtener el número de personas permitido para la habitación seleccionada
        $sql = "SELECT n_personas_hb FROM habitaciones WHERE id = $habitacion";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $max_personas_habitacion = $row["n_personas_hb"];

            if ($personas > $max_personas_habitacion) {
                // El número de personas excede la capacidad de la habitación
                echo "El número de personas excede la capacidad de la habitación seleccionada.";
            } else {
                // Insertar los datos en la tabla de reservas
                $insert_query = "INSERT INTO reservas (nombre, email, telefono, fecha_llegada, fecha_salida, habitacion, personas)
                                VALUES ('$nombre', '$email', '$telefono', '$fecha_llegada', '$fecha_salida', $habitacion, $personas)";

                if ($conexion->query($insert_query) === TRUE) {
                    // La reserva se insertó con éxito
                    echo "La reserva se ha realizado con éxito. ¡Gracias!";
                } else {
                    echo "Error al realizar la reserva: " . $conexion->error;
                }
            }
        } else {
            echo "No se encontró la habitación seleccionada en la base de datos.";
        }

        $conexion->close();
    }
