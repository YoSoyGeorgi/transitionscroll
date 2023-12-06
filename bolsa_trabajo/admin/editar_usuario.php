<?php


// Crear conexión
$conn = new mysqli('localhost', 'root', 'root', 'ensenando');

// Obtener el ID del usuario a editar
$usuario_id = $_GET['id'];

// Consulta para obtener la información del usuario
$sql_editar = "SELECT id, nombre, apellido, correo, teléfono FROM usuarios WHERE id = $usuario_id";
$result_editar = $conn->query($sql_editar);

// Verificar si la consulta fue exitosa
if ($result_editar === false) {
    echo "Error en la consulta: " . $conn->error;
} else {
    // Obtener los datos del usuario
    $usuario = $result_editar->fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de vacantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylealta.css">
</head>

<body>

    <header>
        <img src="../img/ense.png" alt="Logo" style="width: 225px;">
        <h1 class="mb-4">Editar usuario</h1>
    </header>

    <div class="fixed-top-container">
        <a href="index.php" class="btn btn-danger">Regresar</a>
    </div>

    <div class="container">



        <div class="row">
            <div class="col-md-4 mb-4">
                <!-- Formulario de Edición -->
                <form action="procesar_editar_usuario.php" method="post">
                    <input type="hidden" name="usuario_id" value="<?php echo $usuario['id']; ?>">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario['nombre']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $usuario['apellido']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="pasword" name="pass" id="pass" class="form-control" value="<?php echo $usuario['correo']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Número de Teléfono</label>
                        <input type="tel" name="telefono" id="telefono" class="form-control" value="<?php echo $usuario['teléfono']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>