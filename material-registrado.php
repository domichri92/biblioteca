<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="./css/material-registrado.css" rel="stylesheet" />
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
                <div class="titulo-busqueda"><h3>Material registrado</h3></div>
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
                    <th>Autor</th>
                    <th>Género</th>
                    <th>Colección</th>
                    <th>Editorial</th>
                    <th>Año de publicación</th>
                  </tr>
                  <!--Estas son las filas, van en vertical-->

                  <tr>
                    <td><?php 
                      
                      ?></td>
                    <td>979-8827411369</td>
                    <td>Painted Scars</td>
                    <td>Neva <br />Altaj</td>
                    <td>Dark</td>
                    <td>Perfectly <br />Imperfect</td>
                    <td>2020</td>
                    <td>Independiente</td>
                  </tr>

                  <tr>
                    <td>8498386314</td>
                    <td>Harry Potter <br />y la piedra <br />filosofal</td>
                    <td>J. K. Rowling</td>
                    <td>
                      Infantil<br />
                      Fantasía<br />
                      Aventura<br />
                      Ficción
                    </td>
                    <td>Harry <br />Potter</td>
                    <td>2014</td>
                    <td>Salamandra <br />Infantil <br />y Juvenil</td>
                  </tr>

                  <tr>
                    <td>8408165801</td>
                    <td>Battle <br />Royale</td>
                    <td>Koushun <br />Takami</td>
                    <td>
                      Distopía<br />
                      Ciencia Ficción<br />
                      Thriller
                    </td>
                    <td>N/A</td>
                    <td>2017</td>
                    <td>Booket</td>
                  </tr>

                  <tr>
                    <td>164473687X</td>
                    <td>Cuento <br />de hadas</td>
                    <td>Stephen <br />King</td>
                    <td>
                      Thriller psicológico<br />
                      Fantasía Oscura<br />
                      Horror
                    </td>
                    <td>N/A</td>
                    <td>2022</td>
                    <td>Vintage <br />Español</td>
                  </tr>

                  <tr>
                    <td>843760494X</td>
                    <td>Cien años <br />de soledad</td>
                    <td>Gabriel <br />García <br />Márquez</td>
                    <td>
                      Realismo mágico<br />
                      Alta fantasía
                    </td>
                    <td>N/A</td>
                    <td>2007</td>
                    <td>Ediciones <br />Cátedra</td>
                  </tr>

                  <tr>
                    <td>1644732696</td>
                    <td>Mujercitas</td>
                    <td>Louisa <br />May Alcott</td>
                    <td>
                      Infantil<br />
                      Comedia
                    </td>
                    <td>Alfaguara <br />Clásicos</td>
                    <td>2020</td>
                    <td>Alfaguara <br />Infantil</td>
                  </tr>

                  <tr>
                    <td>0525565884</td>
                    <td>
                      Diario de<br />
                      Anne Frank
                    </td>
                    <td>Anne Frank</td>
                    <td>
                      Biografía<br />
                      Autobiografía
                    </td>
                    <td>N/A</td>
                    <td>2018</td>
                    <td>Vintage <br />Espanol</td>
                  </tr>

                  <tr class="noSearch hide">
                    <td colspan="5"></td>
                  </tr>
                </table>
              </div>
              <div class="sino">
                <a href="index.php" class="-volver">volver</a>
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
