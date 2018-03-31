<?php 
	include_once 'php/variables.php';

	//Variables
	$cambio_local_remoto=1; //Cambio de local a remoto
	//*************************************************//

	$componentes_url=parse_url($_SERVER['REQUEST_URI']);

	$ruta=$componentes_url['path'];


	$partes_ruta=explode('/',$ruta);


	$partes_ruta=array_filter($partes_ruta);


	$partes_ruta=array_slice($partes_ruta,0);

	$ruta_elegida='pages/404.php';

	/*Analisis*/
	/********************/
	if(count($partes_ruta)==0+$cambio_local_remoto){
		//Cuando no pedimos nada { ozonorai.net } 
		$ruta_elegida='pages/inicio.php';
	}else if(count($partes_ruta)==1+$cambio_local_remoto){
		//Cuando pedimos una seccion { ozonorai.net/inicio/ }
		switch ($partes_ruta[0+$cambio_local_remoto]) {
			case 'inicio':
				$ruta_elegida='pages/inicio.php';
				$seccion="inicio";
				break;	
        }
    }
	include $ruta_elegida;
?>