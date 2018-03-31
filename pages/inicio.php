<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <title>Bienvenido - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <header class="cabezera">
            <img class="logo" src="<?php echo RUTA_IMG."logo.png" ?>" alt="">
            <nav class="con-lista-secciones">
                <ul class="lista-secciones">
                    <li class="lista-secciones__item"><a href="">
                        <p>
                            SOBRE <span>NOSOTROS</span>
                        </p>
                        <img src="<?php echo RUTA_IMG."head_logo.png" ?>" alt="Logo - OzonoRai">
                    </a></li>
                    <li class="lista-secciones__item"><a href="">
                        <p>
                            NUESTROS <span>PRODUCTOS</span>
                        </p>
                        <img src="<?php echo RUTA_IMG."head_productos.png" ?>" alt="Logo - OzonoRai">
                    </a></li>
                    <li class="lista-secciones__item"><a href="">
                        <p>
                            NUESTROS <span>SERVICIOS</span>
                        </p>
                        <img src="<?php echo RUTA_IMG."head_servicios.png" ?>" alt="Logo - OzonoRai">
                    </a></li>
                    <li class="lista-secciones__item"><a href="">
                        <p>
                            SOBRE <span>OZONO Y SALUD</span>
                        </p>
                        <img src="<?php echo RUTA_IMG."head_ozono.png" ?>" alt="Logo - OzonoRai">
                    </a></li>
                    <li class="lista-secciones__item"><a href="">
                        <p>
                            PEDIDOS <span>CONTACTOS</span>
                        </p>
                        <img src="<?php echo RUTA_IMG."head_contacto.png" ?>" alt="Logo - OzonoRai">
                    </a></li>       
                </ul>
            </nav>
        </header>
        <section class="cuerpo">
            <div class="cuerpo__elemento_slide">
                <img class="elemento_slide__imagen" src="<?php echo RUTA_IMG."inicio/wall_vegetables.png" ?>" alt="">
                <div class="elemento_slide__descripcion">
                    <p class="slide_des__title">elimina gérmenes y residuos químicos</p>
                    <p class="slide_des__contenido">Ideal para la limpieza de frutas y verduras, carnes y pescados manteniendo por más tiempo
                        su frescura</p>
                </div>
            </div>           
            <div class="cuerpo__elemento_slide">
                <img class="elemento_slide__imagen" src="<?php echo RUTA_IMG."inicio/wall_agua.png" ?>" alt="">
                <div class="elemento_slide__descripcion">
                    <p class="slide_des__title">salud & bienestar</p>
                    <p class="slide_des__contenido">El ozono es el desinfectante natural más eficaz que se conoce</p>
                </div>
                <div class="elemento_slide__descripcion">
                    <p slide_des__title>purificadores de agua a <span>base ozono</span> </p>
                </div>
            </div>           
            <div class="cuerpo__elemento_slide">
                <img class="elemento_slide__imagen" src="<?php echo RUTA_IMG."inicio/pro01.png" ?>" alt="">
                <img class="elemento_slide__imagen" src="<?php echo RUTA_IMG."inicio/pro02.png" ?>" alt="">
                <img class="elemento_slide__imagen" src="<?php echo RUTA_IMG."inicio/pro03.png" ?>" alt="">
                <img class="elemento_slide__imagen" src="<?php echo RUTA_IMG."inicio/pro04.png" ?>" alt="">
                <img class="elemento_slide__imagen" src="<?php echo RUTA_IMG."inicio/pro05.png" ?>" alt="">
                <div class="elemento_slide__descripcion">
                    <p class="slide_des__title">uso medicinal</p>
                    <p class="slide_des__contenido">El agua ozonizada concentrada representa una gran ayuda en el tratamiento de 
                        gastritis, ya que reduce la acidez estomacal y tonifica las paredes estomacales por 
                        su defecto cicatrizante.
                    </p>
                </div>
            </div>           
        </section>
        <footer class="footer">
            <ul class="lista-footer">
                <li class="lista-footer__item"><a href="">Términos y Condiciones</a></li>
                <li class="lista-footer__item"><a href="">Contáctenos</a></li>
            </ul>
        </footer>
    </main>
</body>
</html>