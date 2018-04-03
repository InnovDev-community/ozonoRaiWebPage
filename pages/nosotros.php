<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <link rel="stylesheet" href="<?php echo RUTA_CSS."nosotros.css" ?>">
    <title>Nosotros - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo nosotros">
            <div class="nosotros__logo">
                <img src="<?php echo RUTA_IMG."logo.png" ?>" alt="">
            </div>   
            <div class="nosotros__descripcion">
                <h1 class="nostros-des__title"><span>Ozonorai -</span> Perú</h1>
                <article class="nostros-des__contenido">
                    <section class="contenido__col-izq">
                        <p class="contenido__parrafo">Empresa Peruana dedicada a la distribuciòn y comercialización de purificadores de agua y aire 
                            a base de ozono para uso doméstico, oficinas, restaurantes, colegios, etc. a nivel nacional e 
                            internacional.
                        </p>
                        <section class="contenido__parrafo">
                            <h2>Visión:</h2>
                            <p>Ser en el 2020, la empresa de mayor posicionamiento en el mercado nacional ofertando
                                productos de la mejor calidad, atención esmerada, precios competitivos y con el equipo 
                                de ventas mejor capacitado.
                            </p>
                        </section>
                        <section class="contenido__parrafo">
                            <h2>Misión:</h2>
                            <p>Somos una empresa internacional que elabora, distribuye y comercializa purificadores de a agua
                                a base de ozono con la tecnología de punta e innovación constante; Nuestro compromiso es mejorar
                                la salud y economía de los hogares, dando a conocer la importancia que tiene la calidad del agua 
                                para el consumo humano en la buena salud.
                            </p>
                        </section>                
                        <section class="contenido__parrafo">
                            <h2>Valores:</h2>
                            <ul>
                                <li>Trabajamos en equipo</li>
                                <li>Actuamos con honestidad</li>
                                <li>Respetamos a nuestros clientes</li>
                                <li>Nuestro compromiso es con la sociedad</li>
                            </ul>
                        </section>
                    </section>
                    <section class="contenido__col-der">
                        <img src="<?php echo RUTA_IMG."nosotros/imagenes_nosotros.png" ?>" alt="Cuidado de alimentos">
                    </section>                
                </article>
            </div> 
        </section>
        <?php include_once "components/comp.footer.php" ?>
    </main>
</body>
</html>