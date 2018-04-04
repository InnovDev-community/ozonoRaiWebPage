<!DOCTYPE html>
<html lang="es">
<head>
    <!-- <?php include_once "components/comp.meta.php" ?> -->
    <?php include_once "pages/components/comp.meta.php" ?>
    <title>Productos - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <!-- <?php include_once "components/comp.header.php" ?> -->
        <?php include_once "pages/components/comp.header.php" ?>
        <section class="cuerpo productos">
            <h1 class="productos__title"><span>Modelos exclusivos</span> en Perú</h1>
            <section class="productos__lista">
                <?php foreach ($products as $product): ?>
                    <a href="#" class="producto" data-id="<?php echo $product["id"] ?>">
                        <figure class="producto__imagen">
                            <img src="<?php echo RUTA_IMG . "productos/min/". $product["image_url"] ?>" alt="<?php echo $product["name"] ?>">
                        </figure>
                        <p class="producto__nombre">
                            <?php echo $product["description_html"] ?>
                        </p>

                        <?php echo $product["video_html"] ?>
                    </a>
                <?php endforeach; ?>
            </section>
            <section class="productos__extra">
                <a href="" class="informacion">
                    <div class="info__1">
                        <img src="<?php echo RUTA_IMG . "productos/min/min_arrow_2.png" ?>" alt="Funcionamiento del sistema">
                        <p>Funcionamiento del Sistema / Especifiaciones Técnicas</p>
                    </div>
                    <div class="info__2">
                        <img src="<?php echo RUTA_IMG . "productos/min/min_arrow_1.png" ?>" alt="Esquema de instalación">
                        <p>Esquema de instalación</p>
                    </div>
                </a>
            </section>
        </section>
        <!-- <?php include_once "components/comp.footer.php" ?> -->
        <?php include_once "pages/components/comp.footer.php" ?>
    </main>
</body>
</html>
