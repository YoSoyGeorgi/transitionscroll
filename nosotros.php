<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="styles/stylenos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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

    <div class="titulo">
        <h1>
            CONÓCENOS
        </h1>
    </div>

    <div class="card-deck">
        <div class="card">
            <div class="card-img-top" alt="Card image cap">
                <i class='bx bxs-edit-alt'></i>
            </div>
            <div class="card-body">
                <h5 class="card-title">Misión</h5>
                <p class="card-text">
                    Brindar servicios de capacitación,
                    asesoría y consultoría educativa de
                    manera comprometida y práctica,
                    acompañando a las instituciones a
                    alcanzar sus objetivos, buscando la
                    innovación.
                </p>
            </div>

        </div>
        <div class="card">
            <div class="card-img-top" alt="Card image cap">
                <i class='bx bx-glasses'></i>
            </div>
            <div class="card-body">
                <h5 class="card-title">Visión</h5>
                <p class="card-text">
                    Posicionarnos entre las empresas de
                    formación con mejores referencias a
                    nivel nacional, profesionalizando a todos
                    aquellos vinculados al área de
                    enseñanza y de capacitación.
                </p>
            </div>

        </div>
        <div class="card">
            <div class="card-img-top" alt="Card image cap">
                <i class='bx bx-book-open'></i>
            </div>
            <div class="card-body">
                <h5 class="card-title">Historia</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>

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