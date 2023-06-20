<?php
try {
    require_once('conexion.php');

    $sql = 'INSERT INTO usuario (nombre, email, pass) VALUES(?,?,?)';

    $consulta = $conexion->prepare($sql);

    $consulta->bind_param('sss', $_POST['nombre'], $_POST['email'], $_POST['password']);

    $password = $_POST['password'];
    $passwordRepetir = $_POST['password-repetir'];

    if ($password == $passwordRepetir) {
        $consulta->execute();

        if ($conexion->error) {
            die('Error ' . $conexion->error);
        } else {
            $consulta->close();
            $conexion->close();
            header('location:../login.php?registro=1');
        }
    } else {
        header('location:../registro.php?registro=1');
    }
} catch (\Throwable $th) {
    header('location:../registro.php?registro=2');
}

?>