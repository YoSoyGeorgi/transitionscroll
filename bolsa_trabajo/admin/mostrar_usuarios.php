<?php


// Crear conexión
$conn = new mysqli('localhost', 'root', 'root', 'ensenando');

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Consulta para obtener la lista de usuarios
$sql = "SELECT id, nombre, apellido, correo FROM usuarios";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    echo "Error en la consulta: " . $conn->error;
} else {
    // Mostrar la lista de usuarios en la tabla
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . " " . $row["apellido"] . "</td>";
            echo "<td>" . $row["correo"] . "</td>";
            echo "<td><a href='eliminar_usuario.php?id=" . $row["id"] . "' class='btn btn-danger'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
    }
}

// Cerrar la conexión
$conn->close();
?>
