<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $empresa = $_POST['empresa'];
    $mensaje = $_POST['mensaje'];

    $errors = array();
    if (empty($nombre)) {
        $errors[] = 'El campo nombre es obligatorio';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'El correo electronico no es valido';
    }
    if (empty($numero)) {
        $errors[] = 'El campo numero es obligatorio';
    }
    if (empty($empresa)) {
        $errors[] = 'El campo empresa es obligatorio';
    }
    if (empty($mensaje)) {
        $errors[] = 'El campo mensaje es obligatorio';
    }

    if (count($errors) == 0) {

        $msj = "De: $nombre <a href='mailto:$email'>$email</a><br>";
        $msj.= "Asunto: informacion <br><br>";
        $msj.= "Cuerpo del mensaje";
        $msj.= '<p>'.$mensaje.'<p>';
        
        $mail = new PHPMailer(true);

        try{
            $mail -> SMTPDebug = SMTP::DEBUG_OFF;
            $mail -> isSMTP();
            $mail -> Host = 'smtp.gmail.com';
            $mail -> Username = 'georgijhon117@gmail.com';
            $mail -> SMTPAuth = true;
            $mail -> Password ='okdv sdxw oncz eirj' ;
            $mail -> SMTPSecure =PHPMailer::ENCRYPTION_SMTPS;
            $mail -> Port = 465;
            
            $mail -> setFrom('georgijhon117@gmail.com'.'Jorge');
            $mail -> addAddress($email,'');

            $mail -> isHTML(true);
            $mail -> Subject = 'Informacion';
            $mail -> Body = utf8_decode($msj);

            $mail -> send();

            $respuesta = 'Correo enviado';
        } catch(Exception $e){
            $respuesta = 'Mensaje ' . $mail->ErrorInfo;
        }

    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <!-- 
        
    <link rel="stylesheet" href="styles/style.css">
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
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
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Aula Virtual</a></li>
        </ul>


    </header>


    <div class="container">

        <section class="formulario">

            <div class="containet py-3">
                <div class="mb-4 border-bottom">
                    <h1 class="fs-4">Contacto</h1>
                </div>

                <?php
                if (isset($errors)) {
                    if (count($errors) > 0) {
                ?>

                        <div class="col-lg-6 col-md-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <?php 
                                    foreach($errors as $error) {
                                        echo $error . '<br>';
                                    }
                                ?>
                            </div>
                        </div>

                <?php

                    }
                }
                ?>


                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <form class="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" autofocus required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electronico</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="numero" class="form-label">Telefono</label>
                                <input type="tel" class="form-control" id="numero" name="numero" required>
                            </div>

                            <div class="mb-3">
                                <label for="empresa" class="form-label">Empresa</label>
                                <input type="text" class="form-control" id="empresa" name="empresa">
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensae" name="mensaje" rows="3"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                        </form>

                    </div>
                </div>

                <?php 
                    if(isset($respuesta)) { ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <php echp $respuesta ?>
                        </div>
                    </div>
            <?php } ?>
            </div>

        </section>



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
    </div>

</body>

</html>