<?php
require_once('conexion.php');

$sql = 'INSERT INTO usuario (nombre, email, pass) VALUES(?,?,?)';

$consulta = $conexion->prepare($sql);

$consulta->bind_param('sss', $_POST['nombre'], $_POST['email'], $_POST['pass']);

$consulta->execute();

if ($conexion->error) {
    die('Error ' . $conexion->error);
} else {
    $consulta->close();
    $conexion->close();
    header('location:../login.php?registro=1');
}
?>