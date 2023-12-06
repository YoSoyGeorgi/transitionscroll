<?php


// Crear conexión
$conn = new mysqli('localhost', 'root', 'root', 'ensenando');

// Obtener el ID del usuario a editar
$usuario_id = $_GET['id'];

// Consulta para obtener la información del usuario
$sql_editar = "SELECT id, titulo_vacante, descripcion, fecha_publicacion, correo_contacto, sueldo, nombre_empresa FROM ofertas_laborales";
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
    <title>Editar vacantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylealta.css">
</head>

<body>

    <header>
        <img src="../img/ense.png" alt="Logo" style="width: 225px;">
        <h1 class="mb-4">Editar vacante</h1>
    </header>

    <div class="fixed-top-container">
        <a href="index.php" class="btn btn-danger">Regresar</a>
    </div>

    <div class="container">



        <div class="row">
            <div class="col-md-4 mb-4">
                <!-- Formulario de Edición -->
                <form action="procesar_editar_vacante.php" method="post">
                    <input type="hidden" name="usuario_id" value="<?php echo $usuario['id']; ?>">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $usuario['titulo_vacante']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $usuario['descripcion']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de publicación</label>
                        <input type="date" name="fecha_publicacion" id="fecha_publicacion" class="form-control" value="<?php echo $usuario['fecha_publicacion']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo de contacto</label>
                        <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo_contacto']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="sueldo" class="form-label">Sueldo</label>
                        <input type="text" name="sueldo" id="sueldo" class="form-control" value="<?php echo $usuario['sueldo']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de la empresa</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario['nombre_empresa']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>