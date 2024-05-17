<?php
include "./php/conexion_be.php";
if(isset($_POST["submit"])) {  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Acceder a los valores enviados desde el formulario
  $cedula = $_POST["cedula"];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $telefono = $_POST["telefono"];
  $cedula_admin = $_POST["cedula_admin"];
  //print_r($_POST); die;
  $sql = "INSERT INTO tbl_registrar_usuario (id_cc, nombres, apellidos, telefono, cc_admin) VALUES (:cedula, :nombre, :apellido, :telefono, :cedula_admin)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':cedula', $cedula);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':apellido', $apellido);
$stmt->bindParam(':telefono', $telefono);
$stmt->bindParam(':cedula_admin', $cedula_admin);
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
    <link href="./css/registrar-usuario.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="contenido">
      <div class="cabeza">
        <header>
          <img src="./img/imagen1.2.png" alt="logo" class="logo2" />
          <img src="./img/imagen1.png" alt="logo" class="logo" />
          <div class="titulo">
            <h1 class="nombre1">Biblioteca pública</h1>
            <h1 class="nombre2">Francisco de Paula Santander</h1>
          </div>
        </header>
      </div>
      <div class="cuerpo">
        <div class="barralateral">
          <nav class="navegacion">
            <ul class="menu">
              <li>
                <a href="inicio-de-sesión.php"
                  ><i class="fa-solid fa-arrow-left"></i>&nbsp; Salir</a
                >
              </li>
              <li>
                <a href="index.php"
                  ><i class="fa-solid fa-house"></i>&nbsp; Inicio</a
                >
              </li>
              <li>
                <a href="index.php"
                  ><i class="fa-solid fa-user"></i>&nbsp; Administrador</a
                >
                <ul class="submenu">
                  <li>
                    <a href="#cuenta.html" class="003.1">Administrador</a>
                  </li>
                  <li><a href="#cuenta.html" class="003.1">Cuenta</a></li>
                  <li><a href="cerrar-sesión.html">Cerrar sesión</a></li>
                </ul>
              </li>
              <li>
                <a href="index.php"
                  ><i class="fa-solid fa-book"></i>&nbsp; Registro</a
                >
                <ul class="submenu">
                               
                  <li><a href="registrar-usuario.php">Registrar usuario</a></li>
                  <li><a href="registrar-material.php">Registrar material</a></li>
                  <li><a href="registrar-préstamo.php">Registrar préstamo</a></li>
                  <li><a href="registrar-devolucion.php">Registrar devolución</a></li>
                  <li><a href="usuarios-registrados.php">Usuarios registrados </a></li>
                  <li><a href="material-registrado.php">Material registrado</a></li>
                              
                </ul>
              </li>
              <li>
                <a href="index.php"
                  ><i class="fa-solid fa-box-archive"></i>&nbsp; Historial</a
                >
                <ul class="submenu">
                <li><a href="historial-préstamos.php">Historial préstamos</a></li>
                  <li><a href="historial-devoluciones.php">Historial devoluciones</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <div class="despues">
          <div class="imagen"></div>
          <div class="tab-cuenta">
            <div class="tabs1">

              <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              <div class="title"><h3>Registrar usuario</h3></div>
              <div class="registrar-usuario-contenido">
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="CC" name="cedula" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Nombres" name="nombre" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Apellidos" name="apellido" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Teléfono" name="telefono"/>
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="CC admin" name="cedula_admin"/>
                </div>
                <div class="sino">
                  <input class="b1" type="submit" value="Registrar" name="submit"/>
                   
                  
                  <a href="index.php" class="-volver -volver2">volver</a>
                </div>
              </div>
              </form>
            
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="final">
          <li>
            <a href="#">Términos y condiciones </a>
          </li>
          <li>
            <a href="#">Ayuda </a>
          </li>
        </div>
      </footer>
    </div>
  </body>
</html>
