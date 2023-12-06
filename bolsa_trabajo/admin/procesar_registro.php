<?php
// Verificar si el formulario se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];

    // Hash de la contraseña (reemplaza 'tu_metodo_hash' con el método de hash que estás utilizando, por ejemplo, password_hash)
    $hashContrasena = password_hash($contrasena, PASSWORD_DEFAULT);

    // Conectar a la base de datos
    $conexion = new mysqli('localhost', 'root', 'root', 'ensenando');

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Intentar preparar la consulta
    $consulta = "INSERT INTO usuarios (nombre, apellido, correo, contraseña, teléfono) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($consulta);

    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conexion->error);
    }

    // Vincular los parámetros
    $stmt->bind_param("sssss", $nombre, $apellidos, $correo, $hashContrasena, $telefono);

    // Verificar si la ejecución es exitosa
    if ($stmt->execute()) {
        // Éxito al registrar el usuario
        $stmt->close();
        $conexion->close();
        echo '<script>alert("El usuario se ha registrado correctamente.");';
        header('Location: alta_usuario.php'); // Cambia esto a la página que deseas después del registro
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