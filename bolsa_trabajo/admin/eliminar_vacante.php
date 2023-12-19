<?php
// Verificar si se proporcionó un ID válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Obtener el ID de la vacante desde la URL
    $idVacante = $_GET['id'];

    // Crear conexión
    $conn = new mysqli('localhost', 'root', 'root', 'ensenando');

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
    }

    // Consulta para eliminar la vacante
    $sql = "DELETE FROM ofertas_laborales WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idVacante);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir a la página de mostrar vacantes
        echo '<script>alert("La vacante se ha eliminado correctamente.");';
        header('Location: alta_vacante.php');
        exit();
    } else {
        // Mostrar un mensaje de error
        echo "Error al eliminar la vacante: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
} else {
    // Redirigir a la página de mostrar vacantes si no se proporcionó un ID válido
    header('Location: alta_vacante.php');
    exit();
}
?>
