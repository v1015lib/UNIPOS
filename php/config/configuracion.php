<?php 

	define("CONEXION", __DIR__);

$dsn = 'mysql:dbname=db_libreria;host=localhost;charset=utf8mb4';
$usuario = 'libreriabd'; 
$contraseña = 'masterbetafull89@';

try {
    $conn = new PDO($dsn, $usuario, $contraseña, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {

    die('Error de conexión: ' . $e->getMessage());
}

?>
