<nav>
    <ul class="nav-links">
        <li><a href="../index.php">Inicio</a></li>
        <li>
            <a href="admin-crear-post.php">Nuevo Post</a>
        </li>
        <li class="dropdown">
            <a href="admin-posteos.php" class="dropdown-btn">
                <?php 
                    require_once('./control-sesion.php');
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
