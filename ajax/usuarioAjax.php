<?php 
    $peticionAjax=true;
    require_once"../config/APP.php";
    //confirmar si se estas enviando los datos de los formularios
    if(isset($_POST['usuari_nombre_reg'])){
        // instancia al controlador
        require_once"../controladores/usuarioControlador.php";
        //instancia al usuario
        $ins_usuario = new usuarioControlador();

          //agregar usuario o registrar un usuario
        if(isset($_POST['usuari_nombre_reg']) && isset($_POST['usuari_Correo_reg']) && isset($_POST['usuari_usuario_reg'])){
                echo $ins_usuario-> agregar_usuario_controlador();
        }
        
    }else{
        session_start(['name'=>'SPP']);
        //vaciar la sesion y destruir sesion de usuario no registrado 
        session_unset();
        session_destroy();
        //redirecciona a login
        header("location: ".SERVERURL."login/");
        exit();
        }