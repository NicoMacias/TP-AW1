<?php
    include('./includes/head-sin-nav.php')
?>
    <section class="registro">
        <div class="registro-form">
          <h2>Registrar usuario</h2>
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
              <label for="email">Email</label>
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
              <button type="submit">Registrar</button>
            </div>
          </form>
          <p>
            ¿Ya tienes una cuenta?
            <a href="login.php">Inicia sesion aquí</a>
          </p>
        </div>
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
    include('./includes/footer-bajo.html')
?>