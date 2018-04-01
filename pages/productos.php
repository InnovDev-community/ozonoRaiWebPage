<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <title>Productos - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo productos">
            <h1 class="productos__title"><span>Modelos exclusivos</span> en Perú</h1>
            <section class="productos__lista">
                <a href="" class="producto">
                    <figure class="producto__imagen">
                        <img src="<?php echo RUTA_IMG."productos/min/min_modelo_gota.png" ?>" alt="">
                    </figure>
                    <p class="producto__nombre">
                        Modelo Gota en Acero Inoxidable
                    </p>
                </a>
                <a href="" class="producto">
                    <figure class="producto__imagen">
                        <img src="<?php echo RUTA_IMG."productos/min/min_modelo_alargado.png" ?>" alt="">
                    </figure>
                    <p class="producto__nombre">
                        Modelo Alargado en Acero Inoxidable
                    </p>
                </a>
                <a href="" class="producto">
                    <figure class="producto__imagen">
                        <img src="<?php echo RUTA_IMG."productos/min/min_modelo_mini.png" ?>" alt="">
                    </figure>
                    <p class="producto__nombre">
                        Modelo Mini en Acrílico - ABS
                    </p>
                </a>
                <a href="" class="producto">
                    <figure class="producto__imagen">
                        <img src="<?php echo RUTA_IMG."productos/min/min_modelo_aerodinamico.png" ?>" alt="">
                    </figure>
                    <p class="producto__nombre">
                        Modelo Aerodinámico en Acrílico - ABS
                    </p>
                </a>
                <a href="" class="producto">
                    <figure class="producto__imagen">
                        <img src="<?php echo RUTA_IMG."productos/min/min_ducha_ozono.png" ?>" alt="">
                    </figure>
                    <p class="producto__nombre">
                        Ducha aséptica con Ozono
                    </p>
                </a>
                <a href="" class="producto">
                    <figure class="producto__imagen">
                        <img src="<?php echo RUTA_IMG."productos/min/min_purificador_aire_domestico.png" ?>" alt="">
                    </figure>
                    <p class="producto__nombre">
                        Purificador de Aire Doméstico
                    </p>
                </a>
                <a href="" class="producto">
                    <figure class="producto__imagen">
                        <img src="<?php echo RUTA_IMG."productos/min/min_purificador_agua_industrial.png" ?>" alt="">
                    </figure>
                    <p class="producto__nombre">
                        Purificador de Agua Industrial
                    </p>
                </a>
            </section>
            <section class="productos__extra">
                <a href="" class="otro_producto">
                    <img src="<?php echo RUTA_IMG."productos/min/min_filtro_purificador.png" ?>" alt="">
                    <p>Filtro Plus Americano</p>
                </a>
                <a href="" class="informacion">
                    <div class="info__1">
                        <img src="<?php echo RUTA_IMG."productos/min/min_arrow_2.png" ?>" alt="Funcionamiento del sistema">
                        <p>Funcionamiento del Sistema / Especifiaciones Técnicas</p>
                    </div>
                    <div class="info__2">
                        <img src="<?php echo RUTA_IMG."productos/min/min_arrow_1.png" ?>" alt="Esquema de instalación">
                        <p>Esquema de instalación</p>
                    </div>
                </a>
            </section>
        </section>
        <?php include_once "components/comp.footer.php" ?>
    </main>
</body>
</html>