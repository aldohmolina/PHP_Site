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

    if(!empty($correo)){
      $correo = trim($correo);
      $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
      if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
        $errores .= 'Por favor ingresa un correo valido <br />';
      }
    } else {
        $errores .= 'Por favor ingresa un correo <br />';
    }

    if (!empty($mensaje)) {
      $mensaje = htmlspecialchars($mensaje);
      $mensaje = trim($mensaje);
      $mensaje = stripslashes($mensaje);
    } else {
      $errores .= 'Por favor ingresa un mensaje <br />';
    }

    if(!$errores){
      $enviar_a = 'aldohmolina@gmail.com';
      $asunto = 'Mail send from anonimus';
      $mensaje_preparado = "From: $nombre \n";
      $mensaje_preparado .= "Mail: $correo \n";
      $mensaje_preparado .= "Message: " . $mensaje;

      //mail($enviar_a, $asunto, $mensaje_preparado);
      $url = 'https://api.sendgrid.com/';
      $user = 'azure_d7568cfda87fb8c3a865cafca699db03@azure.com';
      $pass = 'H3rn4nd3z';

      $params = array(
          'api_user' => $user,
          'api_key' => $pass,
          'to' => $enviar_a,//'aldohmolina@gmail.com',
          'subject' => $asunto,//'testing from curl',
          'html' => $mensaje_preparado,//'testing body_html',
          'text' => $mensaje_preparado,//'testing body',
          'from' => $correo,//'anna@contoso.com',
      );

    $request = $url.'api/mail.send.json';

    // Generate curl request
    $session = curl_init($request);

    // Tell curl to use HTTP POST
    curl_setopt ($session, CURLOPT_POST, true);

    // Tell curl that this is the body of the POST
    curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

    // Tell curl not to return headers, but do return the response
    curl_setopt($session, CURLOPT_HEADER, false);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

     // obtain response
     $response = curl_exec($session);
     curl_close($session);

     // print everything out
     print_r($response);
     if($response['message'] == 'success'){$enviado = 'true';}
    }
}
require 'index.view.php';
?>
