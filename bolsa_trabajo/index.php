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
            background-color: #2d2d2d;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin-top: 20px;
        }

        .vacante {
            cursor: pointer;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        .vacante:hover {
            background-color: #f0f0f0;
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
    </style>
</head>

<body>

    <header>
        <h1>Ofertas Laborales</h1>
    </header>

    <div class="container">
        <div id="columna-izquierda">
            <?php
            // Incluye el archivo con la lógica de manejo de ofertas
            include 'ofertas.php';

            // Obtiene la lista de ofertas laborales
            $listaOfertasLaborales = obtenerListaOfertasLaborales();

            // Muestra la lista de ofertas en la columna izquierda
            foreach ($listaOfertasLaborales as $oferta) {
                echo '<div class="vacante" onclick="mostrarInformacionOferta(' . $oferta['id'] . ')">';
                echo '<strong>' . $oferta['titulo_vacante'] . '</strong>';
                echo '</div>';
            }
            ?>
        </div>

        <div id="columna-derecha">
            <?php
            // Muestra la información detallada de la oferta seleccionada
            if (isset($_GET['id_oferta'])) {
                $idOfertaSeleccionada = $_GET['id_oferta'];
                $informacionOferta = obtenerInformacionOfertaLaboral($idOfertaSeleccionada);

                echo '<h2>' . $informacionOferta['titulo_vacante'] . '</h2>';
                echo '<p>Descripción: ' . $informacionOferta['descripcion'] . '</p>';
                // ... (más campos de información)
            }
            ?>
        </div>
    </div>

    <script>
        function mostrarInformacionOferta(idOferta) {
            // Utiliza AJAX para cargar la información detallada en la columna derecha
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('columna-derecha').innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', 'detalle_oferta.php?id_oferta=' + idOferta, true);
            xhr.send();
        }
    </script>

</body>

</html>
