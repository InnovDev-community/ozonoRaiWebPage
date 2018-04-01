<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <title>Productos - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo producto">
            <section class="producto__contenedor">
                <div>
                    <img class="producto__imagen" src="<?php echo RUTA_IMG."productos/normal/modelo_gota.png" ?>" alt="Modelo Gota en Acero Inoxidable">
                    <div class="producto__detalles">
                        <h1>Modelo Gota en Acero Inoxidable</h1>
                        <div>
                            Hecho en Acero Inoxidable (18-8)
                            Cañon Fijo.
                            Medidas: 31 cm. x 21 cm. x 14cm.
                        </div>
                    </div>
                </div>
                <a class="pedido" href="<?php echo RUTA_CONTACTO ?>">
                    Hacer <span>pedido</span>
                </a>
            </section>
            <section class="producto__otros-productos">
                <div class="otro-producto">
                    <img src="<?php echo RUTA_IMG."productos/min/min_modelo_alargado.png" ?>" alt="Modelo Alargado en Acero Inoxidable">
                    <p>Modelo Alargado en Acero Inoxidable</p>
                </div>
                <div class="otro-producto">
                    <img src="<?php echo RUTA_IMG."productos/min/min_modelo_mini.png" ?>" alt="Modelo Mini en Acrílico - ABS">
                    <p>Modelo Mini en Acrílico - ABS</p>
                </div>
                <div class="otro-producto">
                    <img src="<?php echo RUTA_IMG."productos/min/min_modelo_aerodinamico.png" ?>" alt="Modelo Aerodinámico en Acrílico - ABS">
                    <p>Modelo Aerodinámico en Acrílico - ABS</p>
                </div>
            </section>
        </section>
        <?php include_once "components/comp.footer.php" ?>
    </main>
</body>
</html>