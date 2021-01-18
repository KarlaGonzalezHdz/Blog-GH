<?php require 'header.php';?>
    <div class="contenedor">
        <div class="post">
            <article>
                    <h2 class="Titulo">Nuevo Articulo</h2>
                    <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <input type="text" name="titulo" placeholder="Titulo del articulo">
                    <input type="text" name="extracto" placeholder="extracto del articulo">
                    <textarea name="texto" placeholder="Texto del articulo"></textarea>
                    <input type="file" name="thumb" id="">
                    <input type="submit" value="Crear articulo">

                    </form>
            </article>
        </div>
    </div>
<?php require 'footer.php'; ?>