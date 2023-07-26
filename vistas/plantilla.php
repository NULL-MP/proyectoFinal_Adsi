<!DOCTYPE html>
<html 
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="../assets/"
data-template="vertical-menu-template-free">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="content=" width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0>
    <title>Seguimiento</title>
    <?php include"./vistas/inc/link.php";?>
    </head>
    
    <body>
    <?php
    $peticionAjax=false;
        require_once "./controladores/vistasControlador.php";
        $IV=new vistasControlador();
        $vistas=$IV->obtener_vistas_controlador();
        if($vistas=="login"||$vistas=="404"){
            require_once "./Vistas/contenidos/".$vistas."-view.php";
    }else{



        ?>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                   <?php include"./vistas/inc/sidebar.php"; ?>
               </aside>
               <!--fin del sidebar-->
               <div class="layout-page">
                  <!-- Navbar -->
            
                 <?php include"./vistas/inc/navbar.php"; 
                 
                 include $vistas;
                 ?>

        <!-- / Navbar -->

    </div>
  </div>
</div>
      <?php 
       }
      include"./vistas/inc/script.php"; ?>
    </body>
</html>