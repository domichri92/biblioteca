<?php
// Configuración de la base de datos
$dsn = 'mysql:host=localhost;dbname=dbbiblioteca';
$usuario = 'root';
$contraseña = 'Dominic11*';

try {
    // Establecer conexión con la base de datos
    $conexion = new PDO($dsn, $usuario, $contraseña);

    // Configurar el modo de error de PDO para que lance excepciones en caso de error
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Conexión exitosa";
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    echo "Error de conexión: " . $e->getMessage();
}
?>
