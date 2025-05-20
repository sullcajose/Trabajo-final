<?php
   session_start();
   if (isset($_SESSION['usuario'])) {
       header("location: bien.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro e Inicio de Sesión</title>
</head>
<body>

    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
              
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Regístrate para poder iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>

            </div>

            <div class="contenedor__login-register">

                <!-- Formulario de inicio de sesión -->
                <form action="php/login.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="submit">Entrar</button>
                </form>

                <!-- Formulario de registro -->
                <form action="php/usuario.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo electrónico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>

                    <!-- Campo para seleccionar el rol -->
                    <select name="id_rol" required>
                        <option value="">Selecciona un rol</option>
                        <option value="1">Alumno</option>
                        <option value="2">Docente</option>
                        <option value="3">Administrador</option>
                        <option value="4">Admin General</option>
                    </select>

                    <button type="submit">Registrarse</button>
                </form>
                
            </div>

        </div>
    </main>
    <script src="javascript/js.js"></script>
</body>
</html>
