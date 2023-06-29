<?php
require_once('control-sesion.php');

require_once('conexion.php');

if ($_POST['password-nueva'] != '') {
    $sqlPass = 'SELECT pass FROM Usuario WHERE id = ?';

    $consultaPass = $conexion->prepare($sqlPass);

    $consultaPass->bind_param('i', $_SESSION['usuario_id']);

    $consultaPass->execute();

    $resultado = $consultaPass->get_result();

    $fila = $resultado->fetch_assoc();

    $passwordAlmacenada = $fila['pass'];
    $passwordAnterior = $_POST['password'];
    
    if (password_verify($passwordAnterior, $passwordAlmacenada)) {
        $passwordEncriptada = password_hash($_POST['password-nueva'], PASSWORD_DEFAULT);

        $sql = 'UPDATE Usuario SET nombre=?, pass=? WHERE id=?';

        $consulta = $conexion->prepare($sql);

        $consulta->bind_param('ssi', $_POST['nombre'], $passwordEncriptada, $_SESSION['usuario_id']);

        $passwordNueva = $_POST['password-nueva'];
        $passwordRepetir = $_POST['password-repetir'];

        if ($passwordNueva == $passwordRepetir) {
            $consulta->execute();

            if ($conexion->error) {
                die('Error ' . $conexion->error);
            } else {
                $consulta->close();
                $conexion->close();

                header('location:admin-usuarios.php?id=' . $_SESSION['usuario_id'] . '&e=1');
            }
        } else {
            header('location:admin-usuarios.php?id=' . $_SESSION['usuario_id'] . '&e=2');
        }
    } else {
        header('location:admin-usuarios.php?id=' . $_SESSION['usuario_id'] . '&e=3');
    }
} else {
    $sqlName = 'UPDATE Usuario SET nombre=?  WHERE id=?';

    $consultaName = $conexion->prepare($sqlName);

    $consultaName->bind_param('si', $_POST['nombre'], $_SESSION['usuario_id']);

    $consultaName->execute();

    if ($conexion->error) {
        die('Error ' . $conexion->error);
    } else {
        $consultaName->close();
        $conexion->close();

        header('location:admin-usuarios.php?id=' . $_SESSION['usuario_id'] . '&e=1');
    }
}


?>