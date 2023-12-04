<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="styleindex.css">

    <script src="js/main.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Vacantes</h1>

                <ul class="list-group">
                    <?php

                    // Conecta a la base de datos
                    $conexion = new mysqli('localhost', 'root', 'root', 'ensenando');

                    // Realiza la consulta a la base de datos
                    $consulta = "SELECT * FROM ofertas_laborales";
                    $resultado = $conexion->query($consulta);

                    // Recorre el resultado de la consulta
                    while ($fila = $resultado->fetch_assoc()) {
                        // Agrega la vacante a la lista
                        echo '<li class="list-group-item">';
                        echo '<a href="#">';
                        echo '<h3>' . $fila['titulo_vacante'] . '</h3>';
                        echo '<p>' . $fila['descripcion'] . '</p>';
                        echo '</a>';
                        echo '</li>';
                    }

                    // Cierra la conexión a la base de datos
                    $conexion->close();

                    ?>

                </ul>
            </div>
            <div class="col-md-6">
                <div class="vacante-detalle">
                </div>
            </div>
        </div>
    </div>
</body>

</html>