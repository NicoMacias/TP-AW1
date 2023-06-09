<?php
// Session
session_start();
session_regenerate_id();
define('USER', 'nico');
define('PASS', 'qwer');
///
$user = '';
$pass = '';
$loggued = false;
if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user === USER && $pass === PASS) {
        $_SESSION['USER'] = $user;
        $_SESSION['LOGGED'] = true;
        header("Location: index.php");
    }
}
if (isset($_SESSION['LOGGED']) && $_SESSION['LOGGED']) {
    $loggued = $_SESSION['LOGGED'];
    $user = $_SESSION['USER'];
}
if (isset($_SESSION['LOGGED']) && isset($_GET['logout']) && intval($_GET['logout']) === 1) {
    $_SESSION = array();
    session_destroy();
    $loggued = false;
}

?>