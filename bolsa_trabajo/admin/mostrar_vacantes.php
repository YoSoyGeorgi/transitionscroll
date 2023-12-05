<?php


// Crear conexión
$conn = new mysqli('localhost', 'root', 'root', 'ensenando');

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Consulta para obtener la lista de usuarios
$sql = "SELECT id, titulo_vacante, descripcion, fecha_publicacion, correo_contacto, sueldo, nombre_empresa FROM ofertas_laborales";
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
            echo "<td>" . $row["titulo_vacante"] . "</td>";
            echo "<td>" . $row["descripcion"] . "</td>";
            echo "<td>" . $row["fecha_publicacion"] . "</td>";
            echo "<td>" . $row["correo_contacto"] . "</td>";
            echo "<td>" . "$" . $row["sueldo"] . "</td>";
            echo "<td>" . $row["nombre_empresa"] . "</td>";

            echo "<td><a href='eliminar_vacante.php?id=" . $row["id"] . "' class='btn btn-danger'>Eliminar</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
    }
}

// Cerrar la conexión
$conn->close();
?>
