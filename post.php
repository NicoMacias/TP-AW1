<?php
    require_once('admin/conexion.php');

    if (isset($_GET['id'])) {
        $sql = "SELECT Entrada.titulo,Entrada.texto,Entrada.imagen,Entrada.fecha,Usuario.nombre FROM Entrada JOIN Usuario ON Entrada.usuario_id=Usuario.id WHERE Entrada.id=?";

        $consulta = $conexion->prepare($sql);

        $consulta->bind_param('i', $_GET['id']);

        $consulta->execute();

        $consulta->bind_result($titulo, $texto, $imagen, $fecha, $nombres);

        $consulta->fetch();

        $consulta->close();

        if ($conexion->error) {
            echo $conexion->error;
            die();
        }
    }

    $conexion->close();

    include('admin/components/head.php');
?>
    <section>
      <article class="post-completo">
        <img src="assets/imagenes/<?php echo $imagen; ?>" />
        <div class="articulo-info">
          <h1 class="articulo-titulo"><?php echo $titulo; ?></h1>
          <p class="articulo-descripcion">
            <?php echo nl2br($texto); ?>
          </p>
          <h4 class="articulo-nombre"><?php echo $nombres; ?></h4>
          <p class="articulo-fecha">Fecha de publicación: <?php echo $fecha; ?></p>
        </div>
      </article>
    </section>
    <aside class="aside-index">
      <h2>
        Seguinos en nuestras redes sociales para enterarte de todas las
        novedades al instante!
      </h2>
      <ul>
        <li>
          <i class="fa-brands fa-facebook fa-flip" style="color: #24f478"></i
          ><a href="https://www.facebook.com/">Facebook</a>
        </li>
        <li>
          <i class="fa-brands fa-twitter fa-flip" style="color: #24f478"></i
          ><a href="https://www.twitter.com/">Twitter</a>
        </li>
        <li>
          <i class="fa-brands fa-instagram fa-flip" style="color: #24f478"></i
          ><a href="https://www.instagram.com/">Instagram</a>
        </li>
      </ul>
    </aside>    
<?php
    include('admin/components/footer.php')
?>