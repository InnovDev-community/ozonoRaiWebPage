<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <link rel="stylesheet" href="<?php echo RUTA_CSS."detalles_tecnicos.css" ?>">
    <link rel="stylesheet" href="<?php echo RUTA_CSS."detalles_tecnicos-media.css" ?>">
    <title>Funcionamiento, Esquema e Instalación - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo detalles_tecnicos">
            <div class="detalles_tecnicos-izq">
                <h1 class="detalles_tecnicos__title"><span>Funcionamiento </span> del sistema</h1>
                <p> El sistema de pruficiación de agua realiza tres tratamiento: </p>
                <ul class="lista-subtitulos">
                    <li><span class="icon-angle-double-right"></span><span class="subrayado">Tratam. Fisico:</span> Retiene impurezas y sedimentos.</li>
                    <li><span class="icon-angle-double-right"></span><span class="subrayado">Tratam. Químico:</span> Elimina el cloro, mal sabor y mal olor del agua.</li>
                    <li><span class="icon-angle-double-right"></span><span class="subrayado">Tratam. Microbiológico:</span> Inyecta ozono para la desinfección y esterelización 
                    del agua, eliminando toda la población microbiológica.</li>
                </ul>

                <div class="especificaciones__tecnicas">
                    <h2><span>Especificaciones</span> técnicas</h2>
                    <ul class="lista-especificaciones">
                        <li><span class="icon-angle-double-right"></span>Voltaje de Entrada: 220v.</li>
                        <li><span class="icon-angle-double-right"></span>Consumo de Energía: 25w.</li>
                        <li><span class="icon-angle-double-right"></span>Capacidad Máxima de Agua: 180 Lts./h.</li>
                        <li><span class="icon-angle-double-right"></span>Capacidad DE Ozonización: 25mg/h.</li>
                        <li><span class="icon-angle-double-right"></span>Doble Sistema de Ozonización: Normal y Concentrada.</li>
                    </ul>
                </div>
            </div>
            <div class="detalles_tecnicos-der">
                <h2><span>Esquema de</span> instalación</h2>
                <figure>
                    <img src="<?php echo RUTA_IMG."detalles_tecnicos/esquema_instalacion.png" ?>" alt="">
                </figure>        
            </div>
        </section>
        <?php include_once "components/comp.footer.php" ?>
    </main>
</body>
</html>