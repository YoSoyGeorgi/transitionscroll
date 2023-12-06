<?php


// Crear conexión
$conn = new mysqli('localhost', 'root', 'root', 'ensenando');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $usuario_id = $_POST['usuario_id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $telefono = $_POST['telefono'];

    // Consulta para actualizar la información del usuario
    $sql_actualizar = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', correo = '$correo', contraseña = '$pass' ,teléfono = '$telefono' WHERE id = $usuario_id";

    if ($conn->query($sql_actualizar) === TRUE) {
        // Éxito al actualizar el usuario
        header('Location: index.php'); // Cambia esto a la página que deseas después de la edición
        exit();
    } else {
        // Error al actualizar el usuario
        echo "Error al actualizar el usuario: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
