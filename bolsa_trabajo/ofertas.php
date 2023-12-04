<?php
// Función para obtener la lista de ofertas laborales
function obtenerListaOfertasLaborales()
{
    // Realiza la conexión a la base de datos (ajusta los detalles según tu configuración)
    $conexion = new mysqli('localhost', 'root', 'root', 'ensenando');

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Prepara y ejecuta la consulta para obtener la lista de ofertas laborales
    $consulta = "SELECT id, titulo_vacante FROM ofertas_laborales";
    $resultado = $conexion->query($consulta);

    // Verifica si hay resultados
    if ($resultado->num_rows > 0) {
        // Almacena los resultados en un array asociativo
        $ofertas = $resultado->fetch_all(MYSQLI_ASSOC);
    } else {
        $ofertas = array(); // No hay ofertas disponibles
    }

    // Cierra la conexión a la base de datos
    $conexion->close();

    return $ofertas;
}

// Función para obtener la información detallada de una oferta laboral por ID
function obtenerInformacionOfertaLaboral($id)
{
    // Realiza la conexión a la base de datos (ajusta los detalles según tu configuración)
    $conexion = new mysqli('localhost', 'root', 'root', 'ensenando');

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Prepara y ejecuta la consulta para obtener la información detallada de una oferta laboral
    $consulta = "SELECT * FROM ofertas_laborales WHERE id = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verifica si hay resultados
    if ($resultado->num_rows > 0) {
        // Almacena los resultados en un array asociativo
        $informacionOferta = $resultado->fetch_assoc();
    } else {
        $informacionOferta = null; // No se encontró la oferta laboral
    }

    // Cierra la conexión a la base de datos
    $stmt->close();
    $conexion->close();

    return $informacionOferta;
}

// Verifica si se ha enviado una solicitud para mostrar la información detallada de una oferta
if (isset($_GET['id_oferta'])) {
    // Obtiene el ID de la oferta desde la URL
    $idOfertaSeleccionada = $_GET['id_oferta'];

    // Obtiene la información detallada de la oferta
    $informacionOferta = obtenerInformacionOfertaLaboral($idOfertaSeleccionada);
}

// Obtiene la lista de ofertas laborales
$listaOfertasLaborales = obtenerListaOfertasLaborales();
?>