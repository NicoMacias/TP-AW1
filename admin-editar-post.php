<?php
    include('./includes/head.php')
?>
    <section class="editar-post">
      <h2>Editar post</h2>
      <form>
        <div class="form-group">
          <label for="title">Título:</label>
          <input type="text" id="title" name="title" required />
        </div>
        <div class="form-group">
          <label for="description-short">Descripción breve:</label>
          <textarea
            id="description-short"
            name="description-short"
            required
          ></textarea>
        </div>
        <div class="form-group">
          <label for="description-full">Descripción completa:</label>
          <textarea
            id="description-full"
            name="description-full"
            required
          ></textarea>
        </div>
        <div class="form-group">
          <label for="image">Imagen:</label>
          <input
            type="file"
            id="image"
            name="image"
            accept="image/*"
            required
          />
        </div>
        <button type="submit" class="boton-postear">Editar</button>
      </form>
    </section>
    <aside class="aside-admin">
      <a href="admin-posteos.php">Administrar posteos</a><br />
      <a href="admin-usuarios.php">Editar usuario</a>
    </aside>
<?php
    include('./includes/footer.html')
?>
