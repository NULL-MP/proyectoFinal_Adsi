<style>
body {
  background-image: url('<?php echo SERVERURL; ?>vistas/img/sena11.JPG');
  background-repeat: no-repeat;
}
</style>

<main>

<div class="contenedor__todo">
    <img src="" alt="">
    <div class="caja__trasera">
        <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Regístrate para que puedas iniciar sesión</p>
            <button id="btn__registrarse">Regístrarse</button>
        </div>
    </div>
    
    <!--Formulario de Login y registro-->
    <div class="contenedor__login-register">
        <!--Login-->
        <form action="" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo Electronico">
            <input type="password"   placeholder="Contraseña">
            <button>Entrar</button>
        </form>

        <!--Register-->
        <form action="<?php echo SERVERURL; ?>ajax/usuarioAjax.php" class="formulario__register FormularioAjax" method="POST" data-form="save">
            <h2>Regístrarse</h2>
            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" name="usuari_nombre_reg" placeholder="Nombre completo" required="">
            <input type="text" name="usuari_usuario_reg" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" placeholder="Usuario" required="" >
            <input type="email" name="usuari_Correo_reg" pattern="[a-zA-Z0-9$@.-]{1,100}" placeholder="Correo electronico" required="">
            <input type="text" name="usuari_privilegio_reg" placeholder="Privilegio" required="" >
            <input type="password" name="usuari_Contraseña_reg"  pattern="[a-zA-Z0-9$@.-]{1,100}" placeholder="Contraseña" >
            <input type="password" name="usuari_Contraseña2_reg"  pattern="[a-zA-Z0-9$@.-]{1,100}" placeholder="Confirmar contraseña" required="" >
            <button>Regístrarse</button>
        </form>
    </div>
</div>

</main>
</body>