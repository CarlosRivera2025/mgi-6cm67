---
layout: compress
---

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/login.css">
    </head>

<!-- {% include head.html %} -->

<body>
    {% include navbar.html %}
    
    <main>
        
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!-- Formulario de Login y Registro -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="" class="formulario__login">

                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button>Ingresar</button>

                </form>
                <!-- Registro -->
                <form action="" class="formulario__register">
                        
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo">
                        <input type="text" placeholder="Correo Electrónico">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Registrarse</button>
                </form>

            </div>

        </div>

    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>