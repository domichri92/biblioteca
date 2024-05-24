<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./css/inicio-de-sesión.css" rel="stylesheet" />
  </head>
  <body>
    <form action="IniciarSesion.php" method="POST">
      <div class="marco">
        <div class="cabeza">
          <img src="img/imagen1.2.png" alt="logo" class="logo2" />
          <p class="title">Iniciar Sesión</p>
        </div>
        
        <?php
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                    <?php
                    echo $_GET['error']
                    ?>
            </p>
        <?php
            }  
        ?>      
        
        <br />

        <div class="cuerpo1">
          <div>
            <label></label>
            <input class="input-formulario" placeholder="CC" name="id_cc"/>
          </div>
          <br />
          <div>
            <label></label>
            <input type="password" class="input-formulario" placeholder="Contraseña" name="contrasena"/>
          </div>
          <br />
        </div>
          <br />
        <button type="sudmit">Iniciar</button>
          <br />
        <a href="#" class="-volver">¿Olvidó su contraseña?</a>
        <a href="registrarse.php" class="-volver">Registrarse</a>
        
      </div>
    </form>
  </body>
</html>
