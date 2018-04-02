<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
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
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo producto">
            <section class="producto__contenedor">
                <div>
                    <img class="producto__imagen" src="<?php echo RUTA_IMG."productos/normal/modelo_gota.png" ?>" alt="Modelo Gota en Acero Inoxidable">
                    <div class="producto__detalles">
                        <h1>Modelo Gota en Acero Inoxidable</h1>
                        <div>
                            <header id="menu">
                                <a class="menu__item" href="#" title="Descripción" data-seccion="contenido__descripcion">Descripción</a>
                                <a class="menu__item" href="#" title="Vídeo" data-seccion="contenido__video">Vídeo</a>
                            </header>
                            <div id="contenido">
                                <div id="contenido__descripcion">
                                    <p>Hecho en Acero Inoxidable (18-8)</p>
                                    <p>Cañon Fijo.</p>
                                    <p>Medidas: 31 cm. x 21 cm. x 14cm.</p>
                                </div>
                                <div id="contenido__video">
                                    Video!!!
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
    <script>

        //Por defecto
        $("#menu > a:nth-child(1)").addClass("menu__item-selected"); //Seccion por defecto
        $("#contenido__descripcion").fadeIn(); //Seccion por defecto

        //---
        $("#menu a").on("click",function(event){
            event.preventDefault();
            
            //Reiniciamos todo
            $("#contenido div").hide(); 
            $("#menu a").removeClass("menu__item-selected"); 

            console.log($("#menu a"))

            let nSeccion = $(this).attr("data-seccion");
            $(this).addClass("menu__item-selected"); //Resaltamos la opcion del menu elegida
            $("#contenido > #" + nSeccion).fadeIn(); //Mostramos la seccion elegida
        });
    </script>
</body>
</html>