<?php
	class vistasModelos{
		/*---Este Modelo me permite obtener las vistas ----*/
		protected static function obtener_vistas_modelo($vistas){
			$listaPermitida=["home", "estado-new","estado-list","evidencias-new","evidencias-list"];
			if(in_array($vistas, $listaPermitida)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					$contenido="404";
				}
			}elseif($vistas=="login"|| $vistas=="index" ){
				$contenido="login";

			}else{
				$contenido="404";
			}
			return $contenido;
			
		}
	}
?>