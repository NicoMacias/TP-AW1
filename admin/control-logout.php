<?php
session_start();
$_SESSION = array();
session_destroy();
$_SESSION['loggued'] = false;
header('location:../index.php');
?>