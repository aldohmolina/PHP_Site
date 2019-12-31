<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if(!empty($nombre)){
      $nombre = trim($nombre);
      $nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
    } else {
      $errores .= 'Por favor ingresa un nombre <br />';
    }
    
}

require 'index.view.php';
?>
