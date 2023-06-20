<?php
    require_once('control-sesion.php');

    require_once('conexion.php');

    $sql = 'SELECT nombre,email FROM Usuario WHERE id = ?';

    $consulta = $conexion->prepare($sql);

    $consulta->bind_param('i', $_SESSION['usuario_id']);

    $consulta->execute();

    $consulta->bind_result($nombre, $email);

    $consulta->fetch();

    include('components/head-admin.php')
?>
    <section class="editar-usuario">
      <div class="editar-form">
        <h2>Editar datos del usuario</h2>
        <?php
        if (isset($_GET['e']) && intval($_GET['e']) === 1) {
        ?>
            <div class='usuario-registrado'>
                Los datos del usuario han sido modificados correctamente.
            </div>
        <?php
          } else if (isset($_GET['e']) && intval($_GET['e']) === 2) {
        ?>
            <div class='usuario-incorrecto'>
                La contraseña nueva no coincide con su confirmacion.
            </div>
        <?php
          } else if (isset($_GET['e']) && intval($_GET['e']) === 3) {
        ?>
            <div class='usuario-incorrecto'>
                La contraseña anterior es incorrecta.
            </div>
        <?php
          }
        ?>
        <form action="control-editar-usuario.php?id=<?php echo $_SESSION['usuario_id']; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="username">Nombre</label>
            <input
              type="text"
              id="email"
              name="nombre"
              placeholder="Nombre"
              value="<?php echo $nombre; ?>"
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
              value="<?php echo $email; ?>"
              required
              readonly
            />
          </div>
          <div class="form-group">
            <label for="password">Contraseña anterior</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Contraseña anterior"
            />
          </div>
          <div class="form-group">
            <label for="password">Contraseña nueva</label>
            <input
              type="password"
              id="password"
              name="password-nueva"
              placeholder="Contraseña nueva"
            />
          </div>
          <div class="form-group">
            <label for="password">Confirmar contraseña</label>
            <input
              type="password"
              id="password"
              name="password-repetir"
              placeholder="Repita su contraseña"
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
    <script src="index-admin.js"></script>
<?php
    include('../components/footer.html')
?>
