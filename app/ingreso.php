<?php
include_once '../partes/cabecera.php';
?>
<section>

    <div class="form__container">

        <form action="../validacion/validacion-ingreso.php" method="post" name="formulario">
            <h1 class="form__title">
                Ingreso de usuarios
            </h1>
            <fieldset>
                <legend>
                Información de ingeso
                </legend>
            <label for="correo">
                    Correo: <br>
                    <input type="email" placeholder="Correo" required title="Introduce una dirección de correo electrónica válida" pattern="/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/" minlength="15" maxlength="50" name="correo">
                </label><br>
            <label for="clave">
                Contraseña: <br>
                <input type="password" name="clave" placeholder="Escribe tu contraseña" required title="Por favor escribe tu contraseña" pattern="\w[^<>/$%&#=]+" minlength="10" maxlength="20">
            </label><br>

            <button class="boton" type="submit" name="ingresar" value="Ingresar">
                Ingresar
            </button>
            </fieldset>

            <div class="parrafos">
                <p>
                    ¿Aún no estas registrado?
                </p>
                <p>
                    Regístrate <a href="registro.php"> <strong> Aquí </strong></a>
                </p>
            </div>
        </form>

    </div>

</section>
<?php
include_once '../partes/pie.php';
?>