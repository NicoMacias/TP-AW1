<?php
if ($_SERVER['PHP_SELF'] === '/tp-aw1/login.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/registro.php') {
?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Fulbo</title>
      <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />
      <link rel="icon" href="assets/imagenes/pelota.png">
      <script
        src="https://kit.fontawesome.com/d8f5ce9ad5.js"
        crossorigin="anonymous"
      ></script>
    </head>
    <body>
      <header>
        <div class="logo">
          <a href="index.php"
            ><img src="assets/imagenes/pelota.png" alt="Logo del blog"
          /></a>
        </div>
      </header>
<?php
} else if ($_SERVER['PHP_SELF'] === '/tp-aw1/index.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/post.php') {
?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Fulbo</title>
      <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />
      <link rel="icon" href="assets/imagenes/pelota.png">
      <script
        src="https://kit.fontawesome.com/d8f5ce9ad5.js"
        crossorigin="anonymous"
      ></script>
    </head>
    <body>
      <header>
        <div class="logo">
          <a href="index.php"
            ><img src="assets/imagenes/pelota.png" alt="Logo del blog"
          /></a>
        </div>
      </header>
      <?php
          include('menu.php');
      ?>
<?php
} else {
?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Fulbo</title>
      <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>" />
      <link rel="icon" href="../assets/imagenes/pelota.png">
      <script
        src="https://kit.fontawesome.com/d8f5ce9ad5.js"
        crossorigin="anonymous"
      ></script>
    </head>
    <body>
      <header>
        <div class="logo">
          <a href="../index.php"
            ><img src="../assets/imagenes/pelota.png" alt="Logo del blog"
          /></a>
        </div>
      </header>
      <?php
          include('menu.php');
      ?>
<?php
}
?>

