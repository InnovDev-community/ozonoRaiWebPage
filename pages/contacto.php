<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "components/comp.meta.php" ?>
    <title>Nosotros - OzonoRai</title>
</head>
<body>
    <main class="con-principal">
        <?php include_once "components/comp.header.php" ?>
        <section class="cuerpo contacto">
            <h1 class="contacto__title">Contáctanos</h1>
            <div class="contacto__detalles">
                <div class="detalle">
                    <p class="detalle__departamento">Trujillo:</p>
                    <p class="detalle__avenida">Av. Vallejo 558 Urb. Palermo</p>
                    <p class="detalle__telefono">T. (044) 205 225 - Celular: 950951451</p>
                </div>
                <div class="detalle">
                    <p class="detalle__email">ventas@ozonorai.net</p>
                </div>
            </div>
            <form class="contacto__form" action="">
                <h2>FORMULARIO DE CONTACTOS</h2>
                <input type="text" name="txtNombre" placeholder="Nombre">
                <input type="text" name="txtTelefono" placeholder="Teléfono">
                <input type="email" name="txtEmail" placeholder="E-Mail">
                <textarea name="txtMensaje" placeholder="Mensaje o solicitar pedidos"></textarea>
                <button>Enviar</button>
            </form>
        </section>
        <?php include_once "components/comp.footer.php" ?>
    </main>
</body>
</html>