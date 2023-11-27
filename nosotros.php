<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="styles/stylenos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="container-bar">
        <input type="checkbox" id="btn-social">
        <label for="btn-social" class="fa fa-play"></label>
        <div class="icon-social">
            <a href="#" class="fa fa-facebook">
                <span id="title">Facebook</span>
            </a>
            <a href="#" class="fa fa-youtube">
                <span id="title">Youtube</span>
            </a>
            <a href="#" class="fa fa-instagram">
                <span id="title">Instagram</span>
            </a>
        </div>
    </div>


    <a href="https://api.whatsapp.com/send?phone=442 894 0842&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <header class="header">


        <a href="index.php" class="logo">
            <img src="img/ense.png" alt="Logo" style="width: 125px;">
        </a>
        <input type="checkbox" id="check">

        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <ul class="navbar">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li>
                <a href="#">Divisiones</a>
                <ul class="dropdown">
                    <li><a href="#">Personas</a></li>
                    <li><a href="#">Educación</a></li>
                    <li><a href="#">Empresas</a></li>
                </ul>
            </li>
            <li><a href="contactanos.php">Contacto</a></li>
            <li><a href="#">Aula Virtual</a></li>
        </ul>


    </header>


    <div class="container">
        <div class="card">
            <h2>Tarjeta 1</h2>
            <p>Este es el contenido de la tarjeta 1.</p>
        </div>

        <div class="card">
            <h2>Tarjeta 2</h2>
            <p>Este es el contenido de la tarjeta 2.</p>
        </div>

        <div class="card">
            <h2>Tarjeta 3</h2>
            <p>Este es el contenido de la tarjeta 3.</p>
        </div>
    </div>


    <footer class="pie-pag">

        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/ense.png" alt="Logo">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>Contactanos</h2>
                <p>informes@ensenandoaensenar.com</p>
                <p>442 894 0842</p>
            </div>
            <div class="box">
                <h2>Siguenos</h2>
                <div class="red-social">
                    <a href="#" class='bx bxl-facebook-circle bx-tada'></a>
                    <a href="#" class='bx bxl-instagram bx-tada'></a>
                    <a href="#" class='bx bxl-youtube bx-tada'></a>
                </div>
            </div>
        </div>

        <div class="grupo-2">
            <small>&copy; 2023 <b>Enseñando a Enseñar</b> - Derechos Reservados</small>
        </div>

    </footer>

</body>

</html>