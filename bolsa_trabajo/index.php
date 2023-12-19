<!-- index.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ofertas Laborales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Arial", sans-serif;
        }

        header {
            background-color: #ddd;
            color: #000;
            padding: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            margin-top: 20px;
        }

        .vacante {
            cursor: pointer;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #ddd;
            transition: background-color 0.3s ease;
        }

        .vacante:hover {
            background-color: #ddd;
        }

        #columna-izquierda {
            width: 30%;
            float: left;
        }

        #columna-derecha {
            width: 70%;
            float: left;
            padding-left: 20px;
        }

        /* Estilos adicionales para fijar el botón de cierre de sesión en la esquina superior derecha */
        .fixed-top-container {
            position: fixed;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>

    <header>
        <img src="../img/ense.png" alt="Logo" style="width: 175px;">
        <h1>Ofertas Laborales</h1>
    </header>

    <!-- Verificar si el usuario ha iniciado sesión -->
    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: login.php');
        exit();
    }
    ?>

    <!-- Botón de cierre de sesión -->
    <div class="fixed-top-container">
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <div class="container">
        <!-- Columna Izquierda -->
        <div id="columna-izquierda">
            <?php
            include 'ofertas.php';
            $listaOfertasLaborales = obtenerListaOfertasLaborales();

            foreach ($listaOfertasLaborales as $oferta) {
                echo '<div class="vacante" onclick="mostrarInformacionOferta(' . $oferta['id'] . ')">';
                echo '<strong>' . $oferta['titulo_vacante'] . '</strong>';
                echo '</div>';
            }
            ?>
        </div>

        <!-- Columna Derecha -->
        <div id="columna-derecha">
            <!-- Contenedor para mostrar la información de la oferta y el formulario de postulación -->
            <div id="info-oferta-container"></div>
        </div>
    </div>
    </div>

    <script>
        function mostrarInformacionOferta(idOferta) {
            // Utiliza AJAX para cargar la información detallada y el formulario
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('info-oferta-container').innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', 'detalle_oferta.php?id_oferta=' + idOferta, true);
            xhr.send();
        }
    </script>

</body>

</html>