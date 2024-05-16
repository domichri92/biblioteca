<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./css/historial-devoluciones.css" rel="stylesheet" />
    <script src="js/tablas-buscar.js"></script>
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
                  <li><a href="#04.1">Registrar usuario</a></li>
                  <li><a href="#04.2">Registrar material</a></li>
                  <li><a href="#04.3">Registrar préstamo</a></li>
                  <li><a href="#04.5">Registrar devolución</a></li>
                  <li><a href="#04.6">Usuarios registrados </a></li>
                  <li><a href="#04.7">Material registrado</a></li>
                </ul>
              </li>
              <li>
                <a href="#05"
                  ><i class="fa-solid fa-box-archive"></i>&nbsp; Historial</a
                >
                <ul class="submenu">
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
            <div class="tabs2">
              <!--se muestran aquí los usuarios registrados-->
              <div class="title">
                <h3>Historial de devoluciones</h3>
              </div>
              <div class="historial">
                <form>
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <input
                    id="searchTerm"
                    placeholder="Buscar"
                    type="text"
                    onkeyup="doSearch()"
                  />
                </form>
                <br />

                <table id="datos">
                  <tr>
                    <!--Estas la primera fila, es vertical-->

                    <th>ISBN</th>
                    <th>Título</th>
                    <th>CC</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha</th>
                  </tr>
                  <!--Estas son las filas, van en vertical-->

                  <tr>
                    <td>979-8827411369</td>
                    <td>Painted Scars</td>
                    <td>535.090.573</td>
                    <td>Liliana Marcela</td>
                    <td>Contreras Rodríguez</td>
                    <td>08-08-2023</td>
                  </tr>

                  <tr>
                    <td>8408165801</td>
                    <td>Harry Potter <br />y la piedra <br />filosofal</td>
                    <td>456.589.174</td>
                    <td>Mario Luis</td>
                    <td>Paredes Arroyo</td>
                    <td>08-07-2023</td>
                  </tr>

                  <tr>
                    <td>979-8827411369</td>
                    <td>Painted Scars</td>
                    <td>1112.987.476</td>
                    <td>Luisa</td>
                    <td>Gonzales Ríos</td>
                    <td>20-05-2023</td>
                  </tr>

                  <tr class="noSearch hide">
                    <td colspan="5"></td>
                  </tr>
                </table>
              </div>
              <div class="sino">
                <a href="index.html" class="-volver -volver2">volver</a>
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
