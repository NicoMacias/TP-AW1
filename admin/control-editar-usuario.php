<?php
require_once('control-sesion.php');

require_once('conexion.php');

$sql = 'UPDATE Usuario SET nombre=?,email=? WHERE id=?';

$consulta = $conexion->prepare($sql);

$consulta->bind_param('ssi', $_POST['nombre'], $_POST['email'], $_SESSION['usuario_id']);

$consulta->execute();

if ($conexion->error) {
    die('Error ' . $conexion->error);
} else {
    $consulta->close();
    $conexion->close();
    header('location:admin-usuarios.php?id=' . $_SESSION['usuario_id'] . '&e=1');
}
?>