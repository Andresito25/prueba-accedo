<?php
include_once '../partes/cabecera.php';
?>
<section>

    <div class="form__container">

        <form action="../validacion/validacion-registro.php" method="post" name="formulario">
            <h1 class="form__title">
                Formulario de registro
            </h1>

            <fieldset>
                <legend>
                    Información de registro
                </legend>
                <label for="nombre de usuario">
                    Nombre de usuario: <br>
                    <input type="text" placeholder="Escribe tu nombre de usuario" required title="Por favor escribe tu nombre de usuario. No se permiten tíldes, eñes, caracteres especiales, ni espacios, en lugar de espacios, puedes usar - ó _" pattern="[A-Za-z0-9_-]+[^><\/\{\}\[\]\(\)\$%&#=?¿¡!|]" minlength="8" maxlength="20" name="nombre_usuario">
                </label><br>
                <label for="clave">
                    Contraseña: <br>
                    <input type="password" placeholder="Escribe tu contraseña" required title="Por favor escribe tu contraseña" pattern="\w[^<>\/\{\}\[\]\(\)\$%&#=?¿¡!| ]+" minlength="10" maxlength="20" name="clave">
                </label><br>
                <label for="correo">
                    Correo: <br>
                    <input type="email" placeholder="Correo" required title="Introduce una dirección de correo electrónica válida" pattern="/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/" minlength="15" maxlength="50" name="correo">
                </label><br>
            
            <button class="boton" type="submit" name="registrar" value="Registrarme">
                Registrarme
            </button>
            </fieldset>

            <div class="parrafos">
                <p>
                    ¿Ya tienes una cuenta?
                </p>
                <p>
                    Inicia sesión <a href="ingreso.php"> <strong> Aquí </strong></a>
                </p>
            </div>
        </form>

    </div>

</section>
<?php
include_once '../partes/pie.php';
?>