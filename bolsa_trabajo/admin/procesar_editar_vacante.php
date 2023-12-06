<?php


// Crear conexión
$conn = new mysqli('localhost', 'root', 'root', 'ensenando');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $usuario_id = $_POST['usuario_id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha_publicacion'];
    $correo = $_POST['correo'];
    $sueldo = $_POST['sueldo'];
    $nombre = $_POST['nombre'];


    
    // Consulta para actualizar la información del usuario
    $sql_actualizar = "UPDATE ofertas_laborales SET titulo_vacante = '$titulo', descripcion = '$descripcion', fecha_publicacion = '$fecha', correo_contacto = '$correo' ,sueldo = '$sueldo', nombre_empresa = '$nombre' WHERE id = $usuario_id";

    if ($conn->query($sql_actualizar) === TRUE) {
        // Éxito al actualizar el usuario
        header('Location: index.php'); // Cambia esto a la página que deseas después de la edición
        exit();
    } else {
        // Error al actualizar el usuario
        echo "Error al actualizar la vacante: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
