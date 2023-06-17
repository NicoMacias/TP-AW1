<?php
session_start();
if (empty($_SESSION['usuario_id'])) {
    if ($_SERVER['PHP_SELF'] == "/index.php") {
        header('location:./index.php');
        exit();
    }
} else if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
    $idUser = $_SESSION['usuario_id'];
}
?>