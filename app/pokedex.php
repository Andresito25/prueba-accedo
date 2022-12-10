<?php
include_once '../partes/cabecera.php';

if (isset($_SESSION['usuario'])) {

    $id = $_POST['id'];
    $nombrePokemon = $_POST['nombre_pokemon'];
    $imagenFrontal = $_POST['imagenFrontal'];
    $imagenTrasera = $_POST['imagenTrasera'];
    $primerHabilidad = $_POST['primer_habilidad'];
    $segundaHabilidad = $_POST['segunda_habilidad'];

    // print_r($_POST);
} else {
    echo "<p style='text-align:center'>";
    echo "¿Aún no estas registrado?" . " Registrate " . "<a href='../app/registro.php'> <strong>Aquí</strong></a>" . "</br>";
    echo "¿Ya tienes una cuenta?" . " Ingresa " . "<a href='../app/ingreso.php'> <strong>Aquí</strong></a>";
    echo "</p";
}
?>

<section>

    <?php if (isset($_POST['boton'])) { ?>

    <div class="tarjeta__pokedex">
        <p class="id__pokemon">
            <?php echo $id; ?>
        </p>
        <p class="nombre__pokemon">
            <?php echo $nombrePokemon; ?>
        </p>
        <div class="imagenes__pokedex">
            <img src="<?php echo $imagenFrontal; ?>" alt="pokemon frontal" loading="lazy">
            <img src="<?php echo $imagenTrasera; ?>" alt="pokemon trasera" loading="lazy">
        </div>
        <hr>
        <p class="habilidades">
            Habilidades:
        <div class="habilidades__individuales">
            <?php
            if ($id != 11 || 14) {
                echo $primerHabilidad . "</br>" . $segundaHabilidad;
            } else {
                echo $primerHabilidad;
            }
            ?>
        </div>
        </p>
    </div>
    
    <?php } ?>

    <a class='boton__volver' href='../app/index.php'>
        <strong>
            Volver
            <i class="fa-solid fa-angles-left"></i>
        </strong>
    </a>

</section>

<?php
include_once '../partes/pie.php';
?>