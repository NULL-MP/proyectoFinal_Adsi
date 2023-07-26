<?php
        require_once "mainModel.php";

        class usuarioModelo extends mainModel{
            //modelo para agregar usuario

            protected static function agregar_usuario_modelo($datos){
                $sql=mainModel::conectar()->prepare("INSERT INTO tblusuario(usuNombre,usuUsuario,usuCorreo,Privilegio,usuPassword) VALUES(:Nombre,:Usuario,:Correo,:Privilegio,:Password)");
                // se capturan los datos
                $sql->bindParam(":Nombre",$datos['Nombre']);
                $sql->bindParam(":Usuario",$datos['Usuario']);
                $sql->bindParam(":Correo",$datos['Correo']);
                $sql->bindParam(":Privilegio",$datos['Privilegio']);
                $sql->bindParam(":Password",$datos['Password']);
                //detener insert
                $sql->execute();
                return $sql;
            }
        }