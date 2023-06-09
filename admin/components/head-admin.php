<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fulbo</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="icon" href="../assets/media/pelota.png">
    <script
      src="https://kit.fontawesome.com/d8f5ce9ad5.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="../index.php"
          ><img src="../assets/media/pelota.png" alt="Logo del blog"
        /></a>
      </div>
    </header>
    <?php
        require_once('./login-logout.php');
        include('menu-admin.php');
    ?>