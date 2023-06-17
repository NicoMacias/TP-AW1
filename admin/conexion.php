<?php
define('SERVER', 'localhost');
define('USUARIO', 'root');
define('PASS', '');
define('BD', 'FulboBlog');

$conexion = new mysqli(SERVER, USUARIO, PASS, BD);

if ($conexion->connect_error) {
    die('No se pudo conectar ' . $conexion->connect_error);
}
?>