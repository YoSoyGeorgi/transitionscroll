<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruba</title>
    <link rel="stylesheet" href="styles/stylecurs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-container mySwiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/01.jpg" alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus dolorum non,
                                modi
                                sunt ips.</p>
                        </div>
                        <div class="card-link">
                            <a href="#">Ver más</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <img src="img/02.jpg" alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus dolorum non,
                                modi
                                sunt ips.</p>
                        </div>
                        <div class="card-link">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/03.jpg" alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus dolorum non,
                                modi
                                sunt ips.</p>
                        </div>
                        <div class="card-link">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/04.jpg" alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus dolorum non,
                                modi
                                sunt ips.</p>
                        </div>
                        <div class="card-link">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/05.jpg" alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus dolorum non,
                                modi
                                sunt ips.</p>
                        </div>
                        <div class="card-link">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="img/06.jpg" alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Descripción</h4>
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum enim possimus dolorum non,
                                modi
                                sunt ips.</p>
                        </div>
                        <div class="card-link">
                            <a href="#">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>

    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>