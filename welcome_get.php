<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta charset="utf-8">
    <title>Sitio Aldo XS </title>
  </head>
  <body>
      Bienvenido/a al Sitio <strong><?php  echo $_POST["name"]; ?></strong><br>
      Tu Email es: <strong><?php echo $_POST["email"]; ?></strong><br>
    <?php
      //echo "<h1> Hola Mundo </h1>";
      for($i=0; $i<100; $i++){
        echo "=";
      }
      echo "<br><h2> Sitio Creado por Aldo Hernández Molina </h2>";
      for($i=0; $i<100; $i++){
        echo "=";
      }
      echo "<br>falto el css :V";
     ?>
  </body>
</html>
