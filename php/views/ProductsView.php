<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "pages/components/comp.meta.php" ?>
    <link rel="stylesheet" href="<?php echo RUTA_CSS."productos.css" ?>">
    <link rel="stylesheet" href="<?php echo RUTA_CSS."productos-media.css" ?>">
    <title>Productos - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "pages/components/comp.header.php" ?>
        <section class="cuerpo productos">
            <div class="vista__productos">
                <h1 class="productos__title"><span>Modelos exclusivos</span> en Perú</h1>
                <section class="productos__lista">
                    <?php foreach ($products as $product): ?>
                        <a href="<?php echo RUTA_PRODUCTOS . $product['id']. "/" . str_replace(' ', '_', $product['name']) ?>" class="producto">
                            <figure class="producto__imagen">
                                <img src="<?php echo RUTA_IMG . "productos/min/min_". $product["image_url"] ?>" alt="<?php echo $product["name"] ?>">
                            </figure>
                            <p class="producto__nombre">
                                <?php echo $product["name"] ?>
                            </p>
                        </a>
                    <?php endforeach; ?>
                </section>
            </div>
            <section class="productos__extra">
                <a href="" class="otro_producto">
                    <img src="<?php echo RUTA_IMG."productos/min/min_filtro_purificador.png" ?>" alt="">
                    <p>Filtro Plus Americano</p>
                </a>            
                <a href="<?php echo RUTA_PRODUCTOS."detalles_tecnicos" ?>" class="informacion">
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
        <?php include_once "pages/components/comp.footer.php" ?>
    </main>
</body>
</html>
