<?php
//conectamos con el servidor
$conectar = @mysql_connect('localhost', 'root', '');
//verificación de conexión
if (!$conectar) {
    echo "Hubo un error en la conexión con el servidor";
} else {
    $base = mysql_select_db('g-bibliotecaria');
    if (!$base) {
        echo "No se encontró la base de datos";
    }
}
//recuperar variables
$gmail = $_POST['gmail'];
$contraseña = $_POST['contraseña'];
$cc = $_POST['cc'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
//sentencia de sql
$sql = "INSERT INTO tbl-registrarse VALUES('$gmail',
                                             '$contraseña',
                                             '$cc',
                                             '$nombres',
                                             '$apellidos',
                                             '$telefono')";
//ejecutar sentencia de sql
$ejecutar = mysql_query($sql);
//verificar ejecución
if (!$ejecutar) {
    echo "Hubo un error";
} else {
    echo "Información guardada<br><a href='index.html'>Volver</a>";
}
