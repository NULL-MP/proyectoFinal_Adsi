<?php 
    
    /*detectar si es una peticion ajax,incluyendo de una forma u otra
    la configuracion del servidor por medio del ajax o index*/
    if( $peticionAjax){
          require_once "../config/SERVER.php";
    }else{
        require_once "./config/SERVER.php";
    }

    class mainModel{
        
        //-----funcion para conectar la BD 

        protected static function conectar(){

            $conexion = new PDO(SGBD, USER, PASS);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }

        //-----funcion ejecutar consultas simples
        
        protected static function Ejecutar_consultas_simples($consulta){
            //preparar la consulta 
           $sql=self::conectar()->prepare($consulta);
           //ejecutar la consulta
           $sql->execute();
           return $sql;
        }
       
        //---encriptar cadenas
        public  function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}
		  
        //---desencriptar cadenas
        protected static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}

        //funcion generar codigos aletorios

        //---------fruncion limpiar cadenas

        protected static function limpiar_cadenas($cadena){
           
            $cadena=trim($cadena);
            $cadena=stripslashes($cadena);
            $cadena=str_ireplace("<script>","", $cadena);
            $cadena=str_ireplace("</script>","", $cadena);
            $cadena=str_ireplace("<scrip src","", $cadena);
            $cadena=str_ireplace("<scri type=","", $cadena);
            $cadena=str_ireplace("SELECT * FROM","", $cadena);
            $cadena=str_ireplace("DELETE FROM","", $cadena);
            $cadena=str_ireplace("INSERT INTO","", $cadena);
            $cadena=str_ireplace("DROP TABLE","", $cadena);
            $cadena=str_ireplace("DROP DATABASE","", $cadena);
            $cadena=str_ireplace("TRUNCATE TABLE","", $cadena);
            $cadena=str_ireplace("SHOW TABLES","", $cadena);
            $cadena=str_ireplace("SHOW DATABASES","", $cadena);
            $cadena=str_ireplace("<?php","", $cadena);
            $cadena=str_ireplace("?>","", $cadena);
            $cadena=str_ireplace("--","", $cadena);
            $cadena=str_ireplace(">","", $cadena);
            $cadena=str_ireplace("<","", $cadena);
            $cadena=str_ireplace("[","", $cadena);
            $cadena=str_ireplace("]","", $cadena);
            $cadena=str_ireplace("^","", $cadena);
            $cadena=str_ireplace("==","", $cadena);
            $cadena=str_ireplace(";","", $cadena);
            $cadena=str_ireplace("::","", $cadena);
            $cadena=str_ireplace("::","", $cadena);
            $cadena=stripslashes($cadena);
            $cadena=trim($cadena);
            return  $cadena;
             
        }
            
        protected static function validar_Datos_($filtro, $cadena){
            if(preg_match("/^".$filtro."$/", $cadena)){
                     return false;
            }else{
               return true;
            }
       }

       //verificar fechas
       protected static function verificar_fechas($fecha){
           $valor=explode('-', $fecha);
           if(count( $valor)==3 && checkdate($valor[1], $valor[2], $valor[0])){

               return false;
           }else{
                   return true;
           }
       }

       //funcion paginador de tablas

       protected static function paginador_de_tablas($pagina, $Npaginas, $url, $botones){
        $tabla=' <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">';
        if($pagina==1){
          $tabla.='<li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-angles-left"></i></a></li>';
        }else{
          $tabla.='
          <li class="page-item">
          <a class="page-link" href='.$url.'1/"<i class="fa-solid fa-angles-left"></i></a></li>
         
          <li class="page-item">
          <a class="page-link" href='.$url.($pagina-1).'/">anterior</a></li> ';
        }
       // ciclo para recorrer los botones del paginador
        $ciclo=0;

        for($i=$pagina; $i<=$Npaginas; $i++){
      //condicion para mostrar solo los botones de paginacion necesarios y no aparezcan todos
          if($ciclo>=$botones){
              break;
           }


           if($pagina==$i){
              $tabla.='<li class="page-item">
              <a class="page-link" href='.$url.$i.'/">'.$i.'</a></li>';
           }else{

              $tabla.='<li class="page-item">
              <a class="page-link" href='.$url.$i.'/">'.$i.'</a></li>';
           }
           $ciclo++;
        }

        $tabla.='</ul></nav>';
        return $tabla;
}
    }