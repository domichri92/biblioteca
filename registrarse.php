<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "g-bibliotecaria";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    echo "Error en la conexión con el servidor";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./css/registrarse.css" rel="stylesheet" />
  </head>
  <body>
    <div class="marco">
        <!-- FORM= "POST" y "name"-->
      <form action="#" class="registrarse" id="registrarse" name="registrarse" .method="POST">
      <div class="cabeza"><p class="title">Registrarse</p></div>
      <!--<div class="cuerpo">-->
      <div class="tipo1">
        <div>
          <label></label>
          <input class="input-formulario" name="Gmail" placeholder="Gmail" required/>
        </div>
        <br />
        <div>
          <label></label>
          <input
            type="password"
            class="input-formulario"
            name="Contraseña"
            placeholder="Contraseña"
            required
          />
        </div>
        <br />
        <div>
          <label></label>
          <input class="input-formulario" name="CC" placeholder="CC" required/>
        </div>
      </div>
      <div class="tipo2">
        <!--aquí termina el primero-->
        <div>
          <label></label>
          <input class="input-formulario" name="Nombres" placeholder="Nombres" required/>
        </div>
        <br />
        <div>
          <label></label>
          <input class="input-formulario" name="Apellidos" placeholder="Apellidos" required/>
        </div>
        <br />
        <div>
          <label></label>
          <input class="input-formulario" name="Telefono" placeholder="Teléfono" required/>
        </div>
        <br />
      </div>
      <br />
      <br />
      <br />
      <button type="submit" name="registrarse" value="registrarse">Registrarse</button>
      <br />
      <a href="inicio-de-sesión.html" class="-volver">Iniciar sesión</a>
      </form>

      <!--</div>-->
    </div>
  </body>
</html>
