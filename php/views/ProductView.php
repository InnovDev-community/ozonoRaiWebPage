<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "pages/components/comp.meta.php" ?>
    <link rel="stylesheet" href="<?php echo RUTA_CSS."detalle_producto.css" ?>">
    <link rel="stylesheet" href="<?php echo RUTA_CSS."detalle_producto-media.css" ?>">
    <title>Productos - OzonoRai</title>
    <style>
        /* Codigo provicional */
        #contenido > div{
            display: none;
        }

        .menu__item-selected{
            background: red;
        }
    </style>
</head>
<body>
    <main class="con-principal">
        <?php include_once "pages/components/comp.header.php" ?>
        <section class="cuerpo producto">
            <section class="producto__contenedor">
                <div>
                    <img src="<?php echo RUTA_IMG . "productos/normal/". $product["image_url"] ?>" alt="<?php echo $product["name"] ?>">
                    <div class="producto__detalles">
                        <h1><?php echo $product['name'] ?></h1>
                        <div>
                            <header id="menu">
                                <a class="menu__item" href="#" title="Descripción" data-seccion="contenido__descripcion">
                                    Descripción
                                </a>
                                <a class="menu__item" href="#" title="Vídeo" data-seccion="contenido__video">
                                    Video
                                </a>
                            </header>
                            <div id="contenido">
                                <div id="contenido__descripcion">
                                    <?php echo $product['description_html'] ?>
                                </div>
                                <div id="contenido__video">
                                    <?php echo $product['video_html'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="pedido" href="<?php echo RUTA_CONTACTO ?>">
                    Hacer <span>pedido</span>
                </a>
            </section>
            <section class="producto__otros-productos">
                <?php foreach ($more_products as $more): ?>
                    <a href="<?php echo RUTA_PRODUCTOS . $more['id']. "/" . str_replace(' ', '_', $more['name']) ?>" class="otro-producto">
                        <img src="<?php echo RUTA_IMG . "productos/min/min_". $more["image_url"] ?>" alt="<?php echo $more["name"] ?>">
                        <p><?php echo $more['name'] ?></p>
                    </a>
                <?php endforeach; ?>
            </section>
        </section>
        <?php include_once "pages/components/comp.footer.php" ?>
    </main>
    <script>

        //Por defecto
        $("#menu > a:nth-child(1)").addClass("menu__item-selected"); //Seccion por defecto
        $("#contenido__descripcion").fadeIn(); //Seccion por defecto

        //---
        $("#menu a").on("click",function(event){
            event.preventDefault();

            //Reiniciamos todo
            $("#contenido > div").hide();
            $("#menu a").removeClass("menu__item-selected");

            console.log($("#menu a"))

            let nSeccion = $(this).attr("data-seccion");
            $(this).addClass("menu__item-selected"); //Resaltamos la opcion del menu elegida
            $("#contenido > #" + nSeccion).fadeIn(); //Mostramos la seccion elegida
        });
    </script>
</body>
</html>
