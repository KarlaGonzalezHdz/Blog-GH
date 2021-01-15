<?php require 'header.php';?>


    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="Titulo">Titulo del articulo</h2>
                <p class="fecha">1 de enero del 2016</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA;?>/imagenes/1.png" alt="">
                    </a>
                    <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="continuar">Continuar leyendo</a>
                </div>
            </article>
        </div>

        <div class="post">
            <article>
                <h2 class="Titulo">Titulo del articulo</h2>
                <p class="fecha">1 de enero del 2016</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA; ?>/imagenes/2.png" alt="">
                    </a>
                    <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="continuar">Continuar leyendo</a>
                </div>
            </article>
        </div>


        <?php require 'paginacion.php' ;?>
    </div>

