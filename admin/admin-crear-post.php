<?php
    require_once('control-sesion.php');
    
    include('components/head.php');
?>
    <section class="crear-post">
      <h2>Crea un nuevo post</h2>
      <form action="control-crear-post.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo" required />
        </div>
        <div class="form-group">
          <label for="resumen">Descripción breve:</label>
          <textarea
            id="resumen"
            name="resumen"
            required
          ></textarea>
        </div>
        <div class="form-group">
          <label for="texto">Descripción completa:</label>
          <textarea
            id="texto"
            name="texto"
            required
          ></textarea>
        </div>
        <div class="form-group">
          <label for="imagen">Imagen:</label>
          <input
            type="file"
            id="imagen"
            name="imagen"
            accept="image/*"
            required
          />
        </div>
        <button type="submit" class="boton-postear">Postear</button>
      </form>
    </section>
    <aside class="aside-admin">
      <a href="admin-posteos.php">Administrar posteos</a><br />
      <a href="admin-usuarios.php">Editar usuario</a>
    </aside>
<?php
    include('components/footer.php')
?>
