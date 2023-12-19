<?php
// Verificar si el formulario se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha_publicacion'];
    $correo = $_POST['correo'];
    $sueldo = $_POST['sueldo'];
    $nombre = $_POST['nombre'];


    // Conectar a la base de datos
    $conexion = new mysqli('localhost', 'root', 'root', 'ensenando');

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Intentar preparar la consulta
    $consulta = "INSERT INTO ofertas_laborales (titulo_vacante, descripcion, fecha_publicacion, correo_contacto, sueldo, nombre_empresa) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($consulta);

    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conexion->error);
    }

    // Vincular los parámetros
    $stmt->bind_param("ssssss", $titulo, $descripcion, $fecha, $correo, $sueldo, $nombre);

    // Verificar si la ejecución es exitosa
    if ($stmt->execute()) {
        // Éxito al registrar el usuario
        $stmt->close();
        $conexion->close();
        echo '<script>alert("La vacante ha sido publicada correctamente.");</script>';
        header('Location: alta_vacante.php'); // Cambia esto a la página que deseas después del registro
        exit();
    } else {
        // Error al registrar el usuario
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}
?>