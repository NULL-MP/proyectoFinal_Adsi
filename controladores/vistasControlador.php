<?php
	require_once "./modelos/vistasModelos.php";
	class vistasControlador extends vistasModelos{
	/*---Este controlador permite obtener la plantilla----*/
	public function obtenerplantilla_controlador(){
		return require_once "./vistas/plantilla.php";
	} 
	/*---Este controlador permite obtener las vistas----*/
	public function obtener_vistas_controlador(){
		if(isset($_GET['views'])){
			$ruta=explode("/", $_GET['views']);
			$respuesta=vistasModelos::obtener_vistas_modelo($ruta[0]);
		}else{
			
			$respuesta="login";
		}
		return $respuesta;
	}

}
?>