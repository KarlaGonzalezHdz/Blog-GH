<?php require 'header.php';?>


<div class="contenedor">
<div class="post">
            <article>
                <h2 class="Titulo">Iniciar Sesion </h2>
                <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="submit" value="Enviar">
                </form>
            </article>
        </div>
</div>

<?php require 'footer.php'; ?>