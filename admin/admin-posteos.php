<?php
    require_once('control-sesion.php');

    require_once('conexion.php');

    $sql = 'SELECT id,titulo,imagen FROM Entrada WHERE usuario_id = ? ORDER BY fecha DESC';

    $consulta = $conexion->prepare($sql);

    $consulta->bind_param('i', $_SESSION['usuario_id']);

    $consulta->execute();

    $consulta->bind_result($id, $titulo, $imagen);

    include('components/head-admin.php');
?>
    <section class="admin-posteos">
      <div class="titulo-posteos">
        <h2>Posteos</h2>
        <a href="admin-crear-post.php" style="text-decoration: none"
          ><button class="nuevo-post">Nuevo post</button></a
        >
      </div>
      <?php
        while ($consulta->fetch()) {
      ?>
        <article>
          <img src="../assets/imagenes/<?php echo $imagen; ?>" />
          <div class="articulo-info">
            <h2 class="articulo-titulo"><?php echo $titulo; ?></h2>
            <div class="botones">
              <a href="admin-editar-post.php?id=<?php echo $id; ?>" class="edit-button">Editar</a>
              <a href="control-eliminar-post.php?id=<?php echo $id; ?>" class="delete-button">Eliminar</a>
            </div>
            <a class="ver-articulo" href="../post.php?id=<?php echo $id; ?>">Ver post</a>
          </div>
        </article>
      <?php
        }
      ?>
    </section>
    <aside class="aside-admin">
      <a href="admin-posteos.php">Administrar posteos</a><br />
      <a href="admin-usuarios.php?id=<?php echo $idUser; ?>">Editar usuario</a>
    </aside>
<?php
    include('../components/footer.html')
?>