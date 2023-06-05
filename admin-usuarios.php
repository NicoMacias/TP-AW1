<?php
    include('./includes/head.php')
?>
    <section class="editar-usuario">
      <div class="editar-form">
        <h2>Editar datos del usuario</h2>
        <form action="#" method="post">
          <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Usuario"
              required
            />
          </div>
          <div class="form-group">
            <label for="email">Email del usuario</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Email"
              required
            />
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Contraseña"
              required
            />
          </div>
          <div class="form-group">
            <label for="password">Confirmar contraseña</label>
            <input
              type="password"
              id="password-repetir"
              name="password"
              placeholder="Repita su contraseña"
              required
            />
          </div>
          <div class="form-group">
            <button type="submit">Editar</button>
          </div>
        </form>
      </div>
    </section>
    <aside class="aside-admin">
      <a href="admin-posteos.php">Administrar posteos</a><br />
      <a href="admin-usuarios.php">Editar usuario</a>
    </aside>
<?php
    include('./includes/footer-bajo.html')
?>
