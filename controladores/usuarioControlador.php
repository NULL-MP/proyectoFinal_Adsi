<?php 

        if($peticionAjax){
            require_once "../modelos/usuarioModelo.php";
        }else{
            require_once "./modelos/usuarioModelo.php";
        }

        class usuarioControlador extends usuarioModelo{
           
            //ya no es protegido por se va a acceder a esta clase
            public function agregar_usuario_controlador(){
                $nombre=mainModel::limpiar_cadenas($_POST['usuari_nombre_reg']);
                $usuario=mainModel::limpiar_cadenas($_POST['usuari_usuario_reg']);
                $correo=mainModel::limpiar_cadenas($_POST['usuari_Correo_reg']);
                $privilegio=mainModel::limpiar_cadenas($_POST['usuari_privilegio_reg']);
                $password=mainModel::limpiar_cadenas($_POST['usuari_Contraseña_reg']);
                $password2=mainModel::limpiar_cadenas($_POST['usuari_Contraseña2_reg']);

                /**comprobar campos vacios*/

                if($nombre=="" || $usuario=="" ||  $correo=="" || $password=="" || $password2==""){
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"Tienes campos vacios",
                        "Tipo"=>"error"
                    ];
                    //pasar alerta a javaScript
                    echo json_encode($alerta);
                    exit();
                }
                if(mainModel::validar_Datos_("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}",$nombre)){
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"El NOMBRE no coincide con el formado solicitado",
                        "Tipo"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }
                if(mainModel::validar_Datos_("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}",$usuario)){
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"El USUARIO no coincide con el formado solicitado",
                        "Tipo"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }
             
                if(mainModel::validar_Datos_("[a-zA-Z0-9$@.-]{7,100}",$password || mainModel::validar_Datos_("[a-zA-Z0-9$@.-]{1,100}",$password2))){
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"Las CONTRASEÑAS no coincide con el formado solicitado",
                        "Tipo"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }
                //comprobar integracion unica del usuario
                $check_user=mainModel::Ejecutar_consultas_simples("SELECT usuUsuario FROM  tblusuario WHERE usuUsuario='$usuario'");
                if($check_user->rowCount()>0){
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error inesperado",
                        "Texto"=>"El NOMBRE DE USUARIO ya se encuentra registrado, intentelo nuevamente",
                        "Tipo"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }

                //comprobar email que sea valido
                
               
            }
        }