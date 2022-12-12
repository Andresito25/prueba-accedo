<?php
/* 
    Al hacer click en uno de los pokemon, ingresar a una nueva página con el pokemon seleccionado y
    mostrar habilidades e imagen del mismo.

    Solo se podrá ingresar a la página del pokemon si el usuario esta logueado. Validar desde la BD el
    email y el password del usuario, si el usuario no tiene cuenta también se podrá registrar

    https://pokeapi.co/api/v2/pokemon/
 */

error_reporting (E_ALL ^ E_WARNING);
error_reporting (E_ALL ^ E_NOTICE);
include_once '../partes/cabecera.php';
if (isset($_SESSION['usuario'])) {
?>

    <section>
        <h1 class="titulo">
            Acá puedes ver las estadísticas de los pokemones
        </h1>

        <div class="contenedor__pokemon">

            <?php
            $pokedex = "https://pokeapi.co/api/v2/pokemon/";
            for ($id = 1; $id < 21; $id++) {
                $resultado = file_get_contents($pokedex . $id . '/');
                $pokemones = json_decode($resultado);
                // print_r($pokemones->sprites->back_default);

                /* Extracción de imágenes del pokemon */
                $nombre_pokemon = $pokemones->name;

                // /* Extracción de imágenes del pokemon */
                $imagenFrontal = $pokemones->sprites->front_default;
                $imagenTrasera = $pokemones->sprites->back_default;

                // /* Extracción de las habilidades del pokemon */
                $primerHabilidad = $pokemones->abilities[0]->ability->name;
                $segundaHabilidad = $pokemones->abilities[1]->ability->name;
            ?>
                <form action="../app/pokedex.php" method="post">

                    <div class="tarjeta__pokemon">
                        <p class="id__pokemon">
                            <?php echo $id; ?>
                        </p>
                        <h3 class="nombre__pokemon">
                            <?php echo $nombre_pokemon; ?>
                        </h3>
                        <img src="<?php echo $imagenFrontal; ?>" name="imagen" alt="imagen pokemon" loading="lazy"> <br>

                        <!-- Envío del id del pokemon por el form -->
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <!-- Envío del nombre del pokemon por el form -->
                        <input type="hidden" name="nombre_pokemon" value="<?php echo $nombre_pokemon ?>">

                        <!-- Envío de imágenes por el form -->
                        <input type="hidden" name="imagenFrontal" value="<?php echo $imagenFrontal ?>">
                        <input type="hidden" name="imagenTrasera" value="<?php echo $imagenTrasera ?>">

                        <!-- Envío de las habilidades por el form -->
                        <input type="hidden" name="primer_habilidad" value="<?php echo $primerHabilidad ?>">
                        <input type="hidden" name="segunda_habilidad" value="<?php echo $segundaHabilidad ?>">

                        <button class="boton__pokemon" type="submit" name="boton">
                            Ver Pokemon
                        </button>
                    </div>

                </form>
            <?php } ?>

        </div>

    </section>

<?php
} else {
    echo "<div class='parrrafo'>";
    echo "<div class='parrrafo__intro'>";
    echo "Esta página es una pokedex en la cual puedes mirar el nombre, la imagen y las habilidades del pokemon que selecciones." . "</br></br>" . "Recuerda crear una cuenta primero" . "</br></br>" . "<hr>";
    echo "</div>";
    echo "¿Aún no estas registrado?" . " Registrate " . "<a href='../app/registro.php'> <strong>Aquí</strong></a>" . "</br>";
    echo "¿Ya tienes una cuenta?" . " Ingresa " . "<a href='../app/ingreso.php'> <strong>Aquí</strong></a>";
    echo "</div>";
}
include_once '../partes/pie.php';
?>