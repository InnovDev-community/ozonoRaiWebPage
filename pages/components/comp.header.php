        <header class="cabezera">
            <a href="<?php echo RUTA_INICIO ?>">
               <!-- <img class="logo" src="<?php echo RUTA_IMG."logo.png" ?>" alt="Logo - OzonoRai"> -->
               <picture class="logo" >
                    <source srcset="<?php echo RUTA_IMG."logo.png" ?>" media="(min-width: 1024px)"> 
                    <img src="<?php echo RUTA_IMG."head_logo.svg" ?>" alt="Logo - OzonoRai">
                </picture>               
            </a>
            <nav class="con-lista-secciones">
                <div id="toggle-menu"><span class="icon-menu"></span></div>
                <ul class="lista-secciones">
                    <li class="lista-secciones__item"><a href="<?php echo RUTA_NOSOTROS ?>">
                        <p>
                            SOBRE <span> NOSOTROS</span>
                        </p>
                        <img class="imagen-item-1" src="<?php echo RUTA_IMG."head_logo.svg" ?>" alt="Logo - OzonoRai">
                    </a></li>
                    <li class="lista-secciones__item"><a href="<?php echo RUTA_PRODUCTOS ?>">
                        <p>
                            NUESTROS <span>PRODUCTOS</span>
                        </p>
                        <img class="imagen-item-2" src="<?php echo RUTA_IMG."head_productos.png" ?>" alt="Productos - OzonoRai">
                    </a></li>
                    <li class="lista-secciones__item"><a href="<?php echo RUTA_SERVICIOS ?>">
                        <p>
                            NUESTROS <span>SERVICIOS</span>
                        </p>
                        <img class="imagen-item-3" src="<?php echo RUTA_IMG."head_servicios.png" ?>" alt="Servicios - OzonoRai">
                    </a></li>
                    <li class="lista-secciones__item"><a href="<?php echo RUTA_OZONO ?>">
                        <p>
                            SOBRE <span>OZONO Y SALUD</span>
                        </p>
                        <!-- <img src="<?php echo RUTA_IMG."head_ozono.png" ?>" alt="Ozono - OzonoRai"> -->
                    </a></li>
                    <li class="lista-secciones__item"><a href="<?php echo RUTA_CONTACTO ?>">
                        <p>
                            PEDIDOS <span>CONTACTOS</span>
                        </p>
                        <img class="imagen-item-5" src="<?php echo RUTA_IMG."head_contacto.png" ?>" alt="Contacto - OzonoRai">
                    </a></li>       
                </ul>
            </nav>
        </header>