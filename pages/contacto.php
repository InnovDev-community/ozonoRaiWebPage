<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <link rel="stylesheet" href="<?php echo RUTA_CSS."contacto.css" ?>">
    <link rel="stylesheet" href="<?php echo RUTA_CSS."contacto-media.css" ?>">
    <title>Contacto - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo contacto">
            <h1 class="contacto__title">Contáctanos</h1>
            <div class="contacto__detalles">
                <div class="detalle">
                    <div class="icon-home"></div>
                    <div class="detalle_parrafos">
                        <p class="detalle__departamento">Trujillo:</p>
                        <p class="detalle__avenida">Av. Vallejo 558 Urb. Palermo</p>
                        <p class="detalle__telefono">T. (044) 204 225 - Celular: 950951451</p>
                    </div>
                    
                </div>
                <div class="detalle">
                    <div class="icon-mail"></div>
                    <div class="detalle_parrafos">
                        <p class="detalle__email">ventas@ozonorai.net</p>
                    </div>
                </div>
            </div>
            <form class="contacto__form" action="" method="POST">
                <h2>FORMULARIO DE CONTACTOS</h2>
                <div class="contenido">
                    <div class="contacto__form-izq">
                        <input  type="text" name="txtNombre" placeholder="Nombre" required><span class="icon-ok span-nombre"></span>
                        <input  type="text" name="txtTelefono" placeholder="Teléfono" required><span class="icon-ok span-tel"></span>
                        <input type="email" name="txtEmail" placeholder="E-Mail" required><span class="icon-cancel span-email"></span>
                    </div>
                    <div class="contacto__form-der">
                        <textarea name="txtMensaje" placeholder="Mensaje o solicitar pedidos" required></textarea><span class="icon-ok"></span>
                        <button name="btnEnviar" disabled>Enviar<span class="icon-paper-plane"></span></button>
                    </div>
                </div>
                
                

                <?php

                    if(isset($_POST['btnEnviar'])){
                        // $emailD= "ventas@ozonorai.net";
                        // $asunto= "Consulta OzonoRai";
                        $mensaje= $_POST['txtMensaje']; //Texto del mensaje
                        $nombreE= $_POST['txtNombre']; //Nombre del emisor
                        $telefonoE=$_POST['txtTelefono']; //Telefono del emisor
                        $emailE= $_POST['txtEmail']; //Email del emisor

                        $cabecera = "Content-type: text/html; charset: utf-8";

                        $texto = '<b>Nombre:</b> '.$nombreE.'<br><b>Correo:</b> '.$emailE.'<br><b>Telefono:</b> '.$telefonoE.'<br><b>Mensaje:</b> '.$mensaje;

                        $envio= mail(EMAIL, ASUNTO_EMAIL, $texto, $cabecera); //funcion mail


                            if($envio){
                                echo "<script>
                                alert('Se ha enviado su mensaje')
                                </script>";
                                exit();
                            }else{
                                echo "<script>
                                alert('No se pudo enviar el mensaje')
                                </script>";
                                exit();
                            }
                    }

                ?>

            </form>
        </section>
        <?php include_once "components/comp.footer.php" ?>
    </main>
</body>
</html>
