<?php
	//define('SERVIDOR','http://localhost/OzonoRai');
	define('SERVIDOR','http://localhost/OzonoRaiWebPage');
	//define('SERVIDOR','http://virtualbamboo.innovdevelopers.com/');

	//Variables de las rutas (Paginas, etilos etc)
	define('RUTA_INICIO', SERVIDOR.'/inicio/');
	define('RUTA_NOSOTROS', SERVIDOR.'/nosotros/');
	define('RUTA_PRODUCTOS', SERVIDOR.'/productos/');
	define('RUTA_SERVICIOS', SERVIDOR.'/servicios/');
	define('RUTA_OZONO', SERVIDOR.'/ozono/');
	define('RUTA_CONTACTO', SERVIDOR.'/contacto/');
	define('RUTA_TERMINOS_CONDICIONES', SERVIDOR.'/terminos_condiciones/');

	//Variables de recursos
	define('RUTA_CSS', SERVIDOR.'/css/');
	define('RUTA_JS', SERVIDOR.'/js/');
	define('RUTA_PHP', SERVIDOR.'/php/');
	define('RUTA_IMG', SERVIDOR.'/img/');

	//Variables de php
	define('RUTA_CONTROLLERS', RUTA_PHP . 'controllers/');
	define('RUTA_MODELS', RUTA_PHP . 'models/');
	define('RUTA_VIEWS', RUTA_PHP . 'views/');

	//Variables para la base de datos
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATA_BASE', 'ozono');
?>
