<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    <title>Formulario Contactos</title>
  </head>
  <body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" class="form-control"  id="nombre" name="nombre" placeholder="Nombre: "value="">
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo: "value="">

            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"></textarea>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
  </body>
</html>
