<?php
require_once('control-sesion.php');

require_once('conexion.php');

$sql = 'SELECT imagen FROM Entrada WHERE usuario_id=? AND id=?';

$consulta = $conexion->prepare($sql);

$consulta->bind_param('ii', $_SESSION['usuario_id'], $_GET['id']);

$consulta->execute();
$consulta->bind_result($imagen);
$consulta->fetch();

$imagenBorrada = unlink('../assets/imagenes/' . $imagen);
$consulta->close();

if ($imagenBorrada) {
    $sql = 'DELETE FROM Entrada WHERE usuario_id=? AND id=?';

    $consulta = $conexion->prepare($sql);

    $consulta->bind_param('ii', $_SESSION['usuario_id'], $_GET['id']);

    $consulta->execute();
  
    $consulta->close();

}
if ($conexion->error) {
    die('Error ' . $conexion->error);
} else {
    $conexion->close();
    header('location:admin-posteos.php?e=0');
}
?>