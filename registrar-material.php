<?php
include "./php/conexion_be.php";
if(isset($_POST["submit"])) {  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Acceder a los valores enviados desde el formulario
  $ISBN = $_POST["ISBN"];
  $titulo = $_POST["titulo"];
  $autor = $_POST["autor"];
  $genero = $_POST["genero"];
  $coleccion = $_POST["coleccion"];
  $editorial = $_POST["editorial"];
  $ano_publicacion = $_POST["ano_publicacion"];
  //print_r($_POST); die;
  $sql = "INSERT INTO tbl_registrar_material (isbn, titulo, autor, genero, coleccion, editorial, ano_publicacion) VALUES (:ISBN, :titulo, :autor, :genero, :coleccion, :editorial, :ano_publicacion)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':ISBN', $ISBN);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':coleccion', $coleccion);
$stmt->bindParam(':editorial', $editorial);
$stmt->bindParam(':ano_publicacion', $ano_publicacion);
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
    <link href="./css/registrar-material.css" rel="stylesheet" />
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
              <div class="title">
                <h3>Registrar material</h3>
              </div>
              <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              <div class="registrar-material-contenido">
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="ISBN" name="ISBN" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Título" name="titulo"/>
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Autor" name="autor" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Género" name="genero" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Colección" name="coleccion"/>
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Editorial" name="editorial" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="Año de publicación" name="ano_publicacion"/>
                </div>
                <div class="sino">
                  <input class="b1" type="submit" value="Registrar" name="submit">
                  
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
