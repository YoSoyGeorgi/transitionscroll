<!-- index.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Arial", sans-serif;
        }

        header {
            background-color: #ddd;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin-top: 20px;
        }

        .vacante {
            cursor: pointer;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #ddd;
            transition: background-color 0.3s ease;
        }

        .vacante:hover {
            background-color: #ddd;
        }

        #columna-izquierda {
            width: 30%;
            float: left;
        }

        #columna-derecha {
            width: 70%;
            float: left;
            padding-left: 20px;
        }

        /* Estilos adicionales para fijar el botón de cierre de sesión en la esquina superior derecha */
        .fixed-top-container {
            position: fixed;
            top: 10px;
            right: 10px;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .btn-primary {
            background-color: #0a141d;
            color: #fff;
            width: 300px;
            height: 100px;
            font-size: 22px;
            border-radius: 35px;
            margin: 0 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <header>
        <h1>Administrador</h1>
    </header>

    <!-- Verificar si el usuario ha iniciado sesión -->
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
    ?>

    <!-- Botón de cierre de sesión -->
    <div class="fixed-top-container">
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group justify-content-center">
                    <a href="alta_usuario.php" class="btn btn-primary">Dar de alta/visualizar usuario</a>
                    <a href="alta_vacante.php" class="btn btn-primary">Dar de alta/visualizar vacante</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>