<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario Contactos</title>
  </head>
  <body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control"  id="nombre" name="nombre" placeholder="Nombre: "value="">

            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo: "value="">
            
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>
            <?php if(!empty($errores)): ?>
              <div class="alert error">
                  <?php echo $errores; ?>
              </div>
          <?php elseif($enviado): ?>
              <div class="alert sucess">
                  <p>Enviado Correctamente</p>
              </div>
          <?php endif ?>
            <div class="alert success">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
  </body>
</html>
