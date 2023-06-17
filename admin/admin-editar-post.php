<?php
    require_once('control-sesion.php');

    require_once('conexion.php');

    $sql = 'SELECT id,titulo,resumen,texto,imagen,fecha FROM Entrada WHERE usuario_id = ? AND id = ?';

    $consulta = $conexion->prepare($sql);

    $consulta->bind_param('ii', $_SESSION['usuario_id'], $_GET['id']);

    $consulta->execute();

    $consulta->bind_result($id, $titulo, $resumen, $texto, $imagen, $fecha);

    $consulta->fetch();

    include('components/head-admin.php')
?>
    <section class="editar-post">
      <h2>Editar post</h2>
      <?php
        if (isset($_GET['e']) && intval($_GET['e']) === 1) {
            echo 'Entrada modificada';
        }
      ?>
      <form action="control-editar-post.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" required />
        </div>
        <div class="form-group">
          <label for="resumen">Descripción breve:</label>
          <textarea
            id="resumen"
            name="resumen"
            required
          ><?php echo $resumen; ?></textarea>
        </div>
        <div class="form-group">
          <label for="texto">Descripción completa:</label>
          <textarea
            id="texto"
            name="texto"
            required
          ><?php echo $texto; ?></textarea>
        </div>
        <div class="form-group">
          <label for="image">Imagen:</label>
          <img width="200" src="assets/imagenes/<?php echo $imagen; ?>" alt="">
          <input
            type="file"
            id="imagen"
            name="imagen"
          />
        </div>
        <button type="submit" class="boton-postear">Editar</button>
      </form>
    </section>
    <aside class="aside-admin">
      <a href="admin-posteos.php">Administrar posteos</a><br />
      <a href="admin-usuarios.php?id=<?php echo $_SESSION['usuario_id']; ?>">Editar usuario</a>
    </aside>
    <script src="index-admin.js"></script>
<?php
    include('../components/footer.html')
?>
