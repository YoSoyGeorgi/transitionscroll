<?php
session_start();

require 'ofertas.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_oferta']) && isset($_FILES['archivo'])) {
        $idOferta = $_POST['id_oferta'];
        $archivo = $_FILES['archivo'];

        // Validar el archivo
        if ($archivo['error'] === UPLOAD_ERR_OK && $archivo['type'] === 'application/pdf') {
            // Mover el archivo al directorio deseado
            $directorioDestino = 'archivos_postulaciones/';
            $nombreArchivo = $idOferta . '_' . basename($archivo['name']);
            $rutaDestino = $directorioDestino . $nombreArchivo;

            move_uploaded_file($archivo['tmp_name'], $rutaDestino);

            // Obtener la dirección de correo del contacto
            $informacionOferta = obtenerInformacionOfertaLaboral($idOferta);
            $correoContacto = $informacionOferta['correo_contacto'];

            // Configurar PHPMailer
            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_OFF;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Username = 'georgijhon117@gmail.com';
                $mail->SMTPAuth = true;
                $mail->Password = 'okdv sdxw oncz eirj';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                $mail->setFrom('georgijhon117@gmail.com' . 'Jorge');
                $mail->addAddress($correoContacto);

                // Adjunta el archivo al correo
                $mail->addAttachment($rutaDestino, $nombreArchivo);

                $mail->isHTML(true);
                $mail->Subject = 'Nueva Postulación';
                $mail->Body    = 'Se ha recibido una nueva postulación. Adjunto encontrarás el CV.';

                $mail->send();

                // Eliminar el archivo del servidor (opcional)
                unlink($rutaDestino);

                // Puedes redirigir a una página de confirmación
                header('Location: confirmacion_postulacion.php');
                exit;
            } catch (Exception $e) {
                echo 'Error: ' . $mail->ErrorInfo;
            }
        } else {
            // Manejar errores de validación del archivo
            echo 'Error: Archivo no válido.';
        }
    } else {
        // Manejar errores de parámetros
        echo 'Error: Parámetros incorrectos.';
    }
} else {
    // Manejar otros métodos HTTP
    echo 'Error: Método no permitido.';
}
