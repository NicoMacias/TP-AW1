<?php
require_once('control-sesion.php');

require_once('conexion.php');
$imagenSubida = false;
$nombreImagen = '';

if (isset($_FILES['imagen'])) {
    $archivoImagen = $_FILES['imagen']['name'];
    $extension = strtolower(end(explode('.', $archivoImagen)));
    $nombreImagen = time() . '-' . $_SESSION['usuario_id'] . '.' . $extension;
    $imagenSubida = move_uploaded_file($_FILES['imagen']['tmp_name'], 'assets/imagenes/' . $nombreImagen);
    
    if ($imagenSubida) {
        $sql = 'SELECT imagen FROM Entrada WHERE usuario_id=? AND id=?';
    
        $consulta = $conexion->prepare($sql);
        
        $consulta->bind_param('ii', $_SESSION['usuario_id'], $_GET['id']);
        
        $consulta->execute();
        $consulta->bind_result($imagen);
        $consulta->fetch();
        
        $imagenBorrada = unlink('assets/imagenes/' . $imagen);
        $consulta->close();
    }
}

if ($nombreImagen !== '' && $imagenSubida) {
    $sql = 'UPDATE Entrada SET titulo=?,resumen=?,texto=?,imagen=? WHERE usuario_id=? AND id=?';
} else {
    $sql = 'UPDATE Entrada SET titulo=?,resumen=?,texto=? WHERE usuario_id=? AND id=?';

}

$consulta = $conexion->prepare($sql);

if ($nombreImagen !== '' && $imagenSubida) {
    $consulta->bind_param('ssssii', $_POST['titulo'], $_POST['resumen'], $_POST['texto'], $nombreImagen, $_SESSION['usuario_id'], $_GET['id']);
} else {
    $consulta->bind_param('sssii', $_POST['titulo'], $_POST['resumen'], $_POST['texto'], $_SESSION['usuario_id'], $_GET['id']);
}

$consulta->execute();

if ($conexion->error) {
    die('Error ' . $conexion->error);
} else {
    $consulta->close();
    $conexion->close();
    header('location:admin-editar-post.php?id=' . $_GET['id'] . '&e=1');
}
?>