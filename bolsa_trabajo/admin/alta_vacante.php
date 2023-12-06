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
        <h1 class="mb-4">Administración de vacantes</h1>
    </header>

    <div class="fixed-top-container">
        <a href="index.php" class="btn btn-danger">Regresar</a>
    </div>

    <div class="container">



        <div class="row">
            <div class="col-md-4 mb-4">
                <h2>Agregar vacante</h2>
                <!-- Formulario de Registro -->
                <form action="procesar_vacante.php" method="post">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de publicación</label>
                        <input type="date" name="fecha_publicacion" id="fecha_publicacion" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo de contacto</label>
                        <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="sueldo" class="form-label">Sueldo</label>
                        <input type="text" name="sueldo" id="sueldo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de la empresa</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>


            <div class="col-md-4">

                <!-- Tabla con la lista de usuarios -->
                <h2>Lista de vacantes</h2>
                <table class="table tabla-lista">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Correo de contacto</th>
                            <th>Sueldo</th>
                            <th>Nombre de la empresa</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí se mostrarán los usuarios desde PHP -->
                        <?php include 'mostrar_vacantes.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>