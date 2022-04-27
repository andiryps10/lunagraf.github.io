





<html>
    <head>
        <title>Inicio de sesion</title>
         <link href="../Css/Estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <main>

            <div class="contenedor_todo">
                <div class="caja_trasera">
                    <div class="caja_trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja_trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn_registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor_login-register">
                    <!--Login-->
                    <form action="../Php/Inicio_usuario.php" method="POST" class="formulario_login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="../Php/Registro_usuario.php" method="POST" class="formulario_register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
        <script src="../JS/InicioSesion.js"></script>

    </body>
</html>
