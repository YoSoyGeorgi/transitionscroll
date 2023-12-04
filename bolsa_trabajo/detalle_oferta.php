<!-- detalle_oferta.php -->
<?php
// Incluye el archivo con la lógica de manejo de ofertas
include 'ofertas.php';

// Muestra la información detallada de la oferta
if (isset($_GET['id_oferta'])) {
    $idOfertaSeleccionada = $_GET['id_oferta'];
    $informacionOferta = obtenerInformacionOfertaLaboral($idOfertaSeleccionada);

    // Estructura básica de la página
    echo '<!DOCTYPE html>';
    echo '<html lang="es">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>Detalle de Oferta Laboral</title>';
    echo '<style>';
    echo 'body { font-family: "Arial", sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }';
    echo 'header { background-color: #ddd; color: #000; padding: 10px; text-align: center; }';
    echo 'section { max-width: 800px; margin: 20px auto; padding: 20px; background-color: #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }';
    echo 'h2 { color: #000; }';
    echo 'p { color: #000; }';
    echo '</style>';
    echo '</head>';
    echo '<body>';

    // Muestra la información detallada de la oferta
    echo '<header>';
    echo '<h1>Oferta Laboral</h1>';
    echo '</header>';

    echo '<section>';
    echo '<h2>' . $informacionOferta['titulo_vacante'] . '</h2>';
    echo '<p>Descripción: ' . $informacionOferta['descripcion'] . '</p>';
    echo '<p>Fecha de Publicación: ' . $informacionOferta['fecha_publicacion'] . '</p>';
    echo '<p>Correo de Contacto: ' . $informacionOferta['correo_contacto'] . '</p>';
    echo '<p>Sueldo: $' . $informacionOferta['sueldo'] . '</p>';
    echo '<p>Nombre de la Empresa: ' . $informacionOferta['nombre_empresa'] . '</p>';

    // Formulario de postulación
    echo '<h3>Postúlate</h3>';
    echo '<form action="procesar_postulacion.php" method="post" enctype="multipart/form-data">';
    echo '<label for="archivo">Adjuntar PDF:</label>';
    echo '<input type="file" name="archivo" id="archivo" accept=".pdf" required>';
    echo '<input type="hidden" name="id_oferta" value="' . $idOfertaSeleccionada . '">';
    echo '<button type="submit" class="btn btn-primary">Enviar Postulación</button>';
    echo '</form>';

    echo '</section>';




    // Cierra la estructura básica de la página
    echo '</body>';
    echo '</html>';
}
?>