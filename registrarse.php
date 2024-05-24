<?php
include "./php/conexion_be.php";
if(isset($_POST["submit"])) {  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Acceder a los valores enviados desde el formulario
  $gmail = $_POST["gmail"];
  $contrasena = $_POST["contrasena"];
  $id_cc = $_POST["id_cc"];
  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];
  $telefono = $_POST["telefono"];
  //print_r($_POST); die;
  $sql = "INSERT INTO tbl_registrarse (gmail, contrasena, id_cc, nombres, apellidos, telefono) VALUES (:gmail, :contrasena, :id_cc, :nombres, :apellidos, :telefono)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':gmail', $gmail);
$stmt->bindParam(':contrasena', $contrasena);
$stmt->bindParam(':id_cc', $id_cc);
$stmt->bindParam(':nombres', $nombres);
$stmt->bindParam(':apellidos', $apellidos);
$stmt->bindParam(':telefono', $telefono);
$stmt->execute();


  // Hacer lo que necesites con los datos...
} else {
  // Si no se han enviado datos del formulario, mostrar un mensaje de error o redirigir a otra página
  echo "No se han recibido datos del formulario";
}

}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./css/registrarse.css" rel="stylesheet" />
    <link href=".registrarse-eee.php" rel="stylesheet" />
  </head>
  <body>
    <div class="marco">
      <!-- FORM= "POST" y "name"-->
      <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="cabeza"><p class="title">Registrarse</p></div>
        <!--<div class="cuerpo">-->
        <div class="tipo1">
          <div>
            <label></label>
            <input
              class="input-formulario" name="gmail" placeholder="Gmail" required/>
          </div>
          <br />
          <div>
            <label></label>
            <input  type="password" class="input-formulario" name="contrasena" placeholder="Contraseña" required/>
          </div>
          <br />
          <div>
            <label></label>
            <input   class="input-formulario" name="id_cc" placeholder="CC" required/>
          </div>
        </div>
        <div class="tipo2">
          <!--aquí termina el primero-->
          <div>
            <label></label>
            <input  class="input-formulario" name="nombres" placeholder="Nombres" required />
          </div>
          <br />
          <div>
            <label></label>
            <input class="input-formulario" name="apellidos" placeholder="Apellidos" required/>
          </div>
          <br />
          <div>
            <label></label>
            <input class="input-formulario" name="telefono" placeholder="Teléfono" required/>
          </div>
          
          <div class="sino">
                  <input class="b1" type="submit" value="Registrar" name="submit"/>
                   
                  <a href="inicio-de-sesión.php" class="-volver">volver</a>
          </div>
         </div>
      </form>
    
        <br />
       
      
      <!--</div>-->
    </div>
  </body>
</html>
