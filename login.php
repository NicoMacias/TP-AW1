<?php
    session_start();
    if (isset($_SESSION['usuario_id']) && $_SESSION['usuario_id'] != '') {
        header('location:index.php');
    }
    include('admin/components/head.php');
?> 
    <section class="login">
      <div class="login-form">
        <h2>Iniciar sesión</h2>
        <form action="admin/control-validacion.php" method="post">
          <?php if(isset($_GET['incorrecta']) && intval($_GET['incorrecta']) === 1): ?>
            <div class='usuario-incorrecto'>
                El usuario o contraseña son incorrectos.
            </div>
          <?php endif; ?>
          <?php if(isset($_GET['registro']) && intval($_GET['registro']) === 1): ?>
            <div class='usuario-registrado'>
                Usuario registrado correctamente, ahora inicie sesion.
            </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="usuario">Nombre de usuario</label>
            <input
              type="email"
              name="email"
              placeholder="Usuario"
              required
            />
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input
              type="password"
              name="pass"
              placeholder="Contraseña"
              required
            />
          </div>
          <div class="form-group">
            <button type="submit">Iniciar sesión</button>
          </div>
        </form>
        <p>
          ¿No tienes una cuenta?
          <a href="registro.php">Regístrate aquí</a>
        </p>
      </div>
    </section>
    <aside class="aside-corta">
      <h2>
        Seguinos en nuestras redes sociales para enterarte de todas las
        novedades al instante!
      </h2>
      <ul class="lista-redes">
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
