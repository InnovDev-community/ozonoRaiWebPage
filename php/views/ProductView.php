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
    </style>
</head>
<body>
    <main class="con-principal">
        <?php include_once "pages/components/comp.header.php" ?>
        <section class="cuerpo detalle_producto">
            <section class="producto__contenedor">
                <img src="<?php echo RUTA_IMG . "productos/normal/". $product["image_url"] ?>" alt="<?php echo $product["name"] ?>">
                <div class="producto__detalles_titulo">
                    
                    <h1><span class=".icon-angle-1 icon-angle-double-right"></span><?php echo $product['name'] ?></h1>
                    <div class="producto__detalles_parrafos">
                        <header id="menu">
                            <a class="menu__item menu-izq" href="#" title="Descripción" data-seccion="contenido__descripcion">
                                Descripción
                            </a>
                            <a class="menu__item menu-der" href="#" title="Vídeo" data-seccion="contenido__video">
                                Video
                            </a>
                        </header>
                        <div id="contenido">
                            <div id="contenido__descripcion">
                                <!-- <?php echo $product['description_html'] ?> -->
                                <ul>
                                    <li>Hecho en Acero Inoxidable (18-8).</li>
                                    <li>Caño Fijo.</li>
                                    <li>Medidas: 31cm. x 21cm. x 14 cm.</li>
                                </ul>
                            </div>
                            <div id="contenido__video">
                                <!-- <?php echo $product['video_html'] ?> -->
                                <div>
                                    <iframe width="350" height="180" src="https://www.youtube.com/embed/oCiPeNQmkzQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="caja-pedido"> -->
                    <a class="pedido" href="<?php echo RUTA_CONTACTO ?>">
                    <span class=".icon-angle-2 icon-angle-double-right"></span>Hacer <span>pedido</span>
                    </a>
                <!-- </div> -->
            </section>
            <section class="producto__otros-productos">
                <?php foreach ($more_products as $more): ?>
                    <a href="<?php echo RUTA_PRODUCTOS . $more['id']. "/" . str_replace(' ', '_', $more['name']) ?>" class="otro-producto">
                        <figure class="otro-producto-imagen">
                            <img src="<?php echo RUTA_IMG . "productos/min/min_". $more["image_url"] ?>" alt="<?php echo $more["name"] ?>">
                        </figure>
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
