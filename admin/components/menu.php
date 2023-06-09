<nav>
    <ul class="nav-links">
        <li><a href="index.php">Inicio</a></li>
        <li>
            <a href="admin/admin-crear-post.php">Nuevo Post</a>
        </li>
        <li class="dropdown">
            <a href="admin/admin-posteos.php" class="dropdown-btn">
                <?php 
                    require_once('admin/login-logout.php');
                    echo $user;
                ?>
            </a>
            <div class="dropdown-content">
                <a href="admin/admin-posteos.php">Mis posteos</a>
                <a href="admin/admin-usuarios.php">Editar usuario</a>
                <a id="logout">Cerrar Sesion</a>
            </div>
        </li>
    </ul>
</nav>
