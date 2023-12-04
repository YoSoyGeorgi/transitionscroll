<?php

if (isset($_POST['email']) && isset($_POST['pass'])) {

  // Conectar a la base de datos
  $conexion = new mysqli('localhost', 'root', 'root', 'ensenando');

  // Comprobar si el nombre de usuario y la contraseña son correctos
  $consulta = "SELECT * FROM usuarios WHERE correo = '" . $_POST['email'] . "' AND contraseña = '" . $_POST['pass'] . "'";
  $resultado = $conexion->query($consulta);

  if ($resultado->num_rows > 0) {
    // El usuario está autenticado
    session_start();
    $_SESSION['email'] = $_POST['email'];
    header('Location: index.php');
  } else {
    // El usuario no está autenticado
    echo '<script>alert("El nombre de usuario o la contraseña son incorrectos.");';
    echo 'window.location.href = "login.php";</script>';
}

  // Cerrar la conexión a la base de datos
  $conexion->close();

}

?>
