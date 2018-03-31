<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <title>Bienvenido - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo inicio">
            <div class="inicio__slide">
                <img class="slide__imagen" src="<?php echo RUTA_IMG."inicio/wall_vegetables.png" ?>" alt="Limpiez de verduras">
                <div class="slide__descripcion">
                    <p class="slide-des__title">elimina gérmenes y residuos químicos</p>
                    <p class="slide-des__contenido">Ideal para la limpieza de frutas y verduras, carnes y pescados manteniendo por más tiempo
                        su frescura</p>
                </div>
            </div>           
            <div class="inicio__slide">
                <img class="slide__imagen" src="<?php echo RUTA_IMG."inicio/wall_agua.png" ?>" alt="El agua es salud">
                <div class="slide__descripcion">
                    <p class="slide-des__title">salud & bienestar</p>
                    <p class="slide-des__contenido">El ozono es el desinfectante natural más eficaz que se conoce</p>
                </div>
                <div class="slide__descripcion">
                    <p slide-des__title>purificadores de agua a <span>base ozono</span> </p>
                </div>
            </div>           
            <div class="inicio__slide">
                <img class="slide__imagen-producto" src="<?php echo RUTA_IMG."inicio/pro01.png" ?>" alt="Modelo gota en acero inoxidable">
                <img class="slide__imagen-producto" src="<?php echo RUTA_IMG."inicio/pro02.png" ?>" alt="Modelo aerodinámico en Acrílico - ABS">
                <img class="slide__imagen-producto" src="<?php echo RUTA_IMG."inicio/pro03.png" ?>" alt="Filtro plus americano">
                <img class="slide__imagen-producto" src="<?php echo RUTA_IMG."inicio/pro04.png" ?>" alt="Modelo alargado en acero inoxidable">
                <img class="slide__imagen-producto" src="<?php echo RUTA_IMG."inicio/pro05.png" ?>" alt="Modelo mini eb acrílico - ABS">
                <div class="slide__descripcion">
                    <p class="slide-des__title">uso medicinal</p>
                    <p class="slide-des__contenido">El agua ozonizada concentrada representa una gran ayuda en el tratamiento de 
                        gastritis, ya que reduce la acidez estomacal y tonifica las paredes estomacales por 
                        su defecto cicatrizante.
                    </p>
                </div>
            </div>           
        </section>
        <?php include_once "components/comp.footer.php" ?>
    </main>
</body>
</html>