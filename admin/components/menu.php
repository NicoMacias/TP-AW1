<?php
if ($_SERVER['PHP_SELF'] === '/tp-aw1/login.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/registro.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/index.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/post.php') {
    require_once('admin/control-sesion.php');
} else {
    require_once('./control-sesion.php');
}
    if (isset($_SESSION['usuario_id']) && $_SESSION['usuario_id'] != '') {
        if ($_SERVER['PHP_SELF'] === '/tp-aw1/index.php' || $_SERVER['PHP_SELF'] === '/tp-aw1/post.php') {
            ?>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Inicio</a></li>
                    <li>
                        <a href="admin/admin-crear-post.php">Nuevo Post</a>
                    </li>
                    <li class="dropdown">
                        <a href="admin/admin-posteos.php" class="dropdown-btn">
                            <?php 
                                echo $nombre;
                            ?>
                        </a>
                        <div class="dropdown-content">
                            <a href="admin/admin-posteos.php">Mis posteos</a>
                            <a href="admin/admin-usuarios.php">Editar usuario</a>
                            <a href="admin/control-logout.php">Cerrar Sesion</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <?php
        } else {
            ?>
            <nav>
                <ul class="nav-links">
                    <li><a href="../index.php">Inicio</a></li>
                    <li>
                        <a href="admin-crear-post.php">Nuevo Post</a>
                    </li>
                    <li class="dropdown">
                        <a href="admin-posteos.php" class="dropdown-btn">
                            <?php 
                                echo $nombre;
                            ?>
                        </a>
                        <div class="dropdown-content">
                            <a href="admin-posteos.php">Mis posteos</a>
                            <a href="admin-usuarios.php">Editar usuario</a>
                            <a href="./control-logout.php">Cerrar Sesion</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <?php
        }
    } else {
?>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>
            </ul>
        </nav>
<?php
    }
?>


