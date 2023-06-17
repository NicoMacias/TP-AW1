<?php
session_start();

require_once('./conexion.php');

$sql = 'SELECT id,nombre,email,pass FROM Usuario WHERE email=?';

$consulta = $conexion->prepare($sql);

$consulta->bind_param('s', $_POST['email']);

$consulta->execute();

$consulta->bind_result($id, $nombre, $email, $pass);

$consulta->fetch();

$consulta->close();

if ($_POST['pass'] == $pass) {
    $_SESSION['usuario_id'] = $id;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['loggued'] = true;
    header('location:../index.php');
} else {
    $_SESSION = array();
    session_destroy();
    header('location:../login.php?incorrecta=1');
}

// if (isset($_POST['user']) && isset($_POST['pass'])) {
//     // $con = new 
//     if (USER === $_POST['user'] && PASS === $_POST['pass']) {
//         //echo 'bienvenido';
//     }
// }


?>