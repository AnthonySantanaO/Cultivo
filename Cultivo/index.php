
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>  
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="container">
                <div class="box_trasera">
                    <div class="box_trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="box_trasera-registro">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn_registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="container_login-registro">
                    <!--Login-->
                    <form action="php/login.php" method="POST" class="formulario_login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo_user">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Entrar</button>
                    </form>

                    <!--Registro-->
                    <form action="php/registro_user.php" method="POST" class="formulario_registro">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombres">
                        <input type="text" placeholder="Correo Electronico" name="correo_user">
                        <input type="text" placeholder="Usuario" name="user">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>