<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./css/registrar-devolución.css" rel="stylesheet" />
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
                <a href="#01"
                  ><i class="fa-solid fa-arrow-left"></i>&nbsp; Salir</a
                >
              </li>
              <li>
                <a href="index.php"
                  ><i class="fa-solid fa-house"></i>&nbsp; Inicio</a
                >
              </li>
              <li>
                <a href="#03"
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
                <a href="#04"
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
                <a href="#05"
                  ><i class="fa-solid fa-box-archive"></i>&nbsp; Historial</a
                >
                <ul class="submenu">
                  <li><a href="#05.1">Historial</a></li>
                  <li><a href="#05.2">Historial préstamos</a></li>
                  <li><a href="#05.3">Historial devoluciones</a></li>
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
                <h3>Registrar devolución</h3>
              </div>
              <div class="registrar-devolucion-contenido">
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="ISBN" />
                </div>
                <div>
                  <label></label>
                  <input class="input-formulario" placeholder="CC" />
                </div>
                <div>
                  <label></label>
                  <input type="date" class="input-formulario -fecha" />
                </div>
                <div class="sino">
                  <button class="b1">
                    <a href="#" class="b1b1">Registrar</a>
                  </button>
                  <a href="index.html" class="-volver -volver2">volver</a>
                </div>
              </div>
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