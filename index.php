<?php
    require_once('admin/conexion.php');

    $sql = "SELECT Entrada.Id,Entrada.titulo,Entrada.resumen,Entrada.imagen,Entrada.fecha,Usuario.nombre FROM Entrada JOIN Usuario ON Entrada.usuario_id=Usuario.id ORDER BY fecha DESC";

    $consulta = $conexion->prepare($sql);

    $consulta->execute();

    $consulta->bind_result($id, $titulo, $resumen, $imagen, $fecha, $nombre);

    include('components/head.php');
?>

<section class="articulos">
    <?php
        while ($consulta->fetch()) {
    ?>
        <article class="articulo-index">
            <img src="admin/assets/imagenes/<?php echo $imagen; ?>" width="300px" heigth="300px" />
            <div class="articulo-info">
                <h2 class="articulo-titulo">
                    <a style="text-decoration: none; color: #ecf0f3;" href="post.php?id=<?php echo $id; ?>">
                        <?php echo $titulo; ?>
                    </a>
                </h2>
                <p class="articulo-descripcion">
                    <?php echo $resumen; ?>
                </p>
                <h4 class="articulo-nombre">
                <?php echo $nombre; ?> - <?php echo $fecha; ?>
                </h4>
                <a class="ver-articulo" href="post.php?id=<?php echo $id; ?>">Ver post</a>
            </div>
        </article>
    <?php        
        }
    ?>
</section>
<aside class="aside-index">
    <h2>
        Seguinos en nuestras redes sociales para enterarte de todas las
        novedades al instante!
    </h2>
    <ul>
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
<section class="dolar">
    <iframe
        style="
            width: 320px;
            height: 260px;
            border-radius: 10px;
            box-shadow: 2px 4px 4px rgb(0 0 0 / 25%);
            display: flex;
            justify-content: center;
            border: 1px solid #bcbcbc;
        "
        src="https://dolarhoy.com/i/cotizaciones/dolar-blue"
        frameborder="0"
    ></iframe>
</section>
<?php
    include('components/footer.html')
?>
<script src="assets/js/index.js"></script>