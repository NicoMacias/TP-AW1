<?php
require_once('control-sesion.php');

$imagenSubida = false;
$nombreImagen = '';
if (isset($_FILES['imagen'])) {
    $archivoImagen = $_FILES['imagen']['name'];
    $extension = strtolower(end(explode('.', $archivoImagen)));
    $nombreImagen = time() . '-' . $_SESSION['usuario_id'] . '.' . $extension;
    $imagenSubida = move_uploaded_file($_FILES['imagen']['tmp_name'], '../assets/imagenes/' . $nombreImagen);
}

require_once('conexion.php');

$sql = 'INSERT INTO Entrada (usuario_id, titulo,resumen,texto,imagen) VALUES(?,?,?,?,?)';

$consulta = $conexion->prepare($sql);

$consulta->bind_param('issss', $_SESSION['usuario_id'], $_POST['titulo'], $_POST['resumen'], $_POST['texto'], $nombreImagen);

$consulta->execute();

if ($conexion->error) {
    die('Error ' . $conexion->error);
} else {
    $consulta->close();
    $conexion->close();
    header('location:admin-posteos.php');
}
?>