<?php
if ($_SERVER['PHP_SELF'] === '/tp-aw1/login.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/registro.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/admin/admin-posteos.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/admin/admin-usuarios.php') {
?>
      <footer class="footer-abajo">
        <p>Creado por <a style="color: #24f478">Nicolas Macias</a> &copy; 2023</p>
      </footer>
    </body>
  </html>
<?php
} else {
?>
      <footer>
        <p>Creado por <a style="color: #24f478">Nicolas Macias</a> &copy; 2023</p>
      </footer>
    </body>
  </html>
<?php
}
?>
