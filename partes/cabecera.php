<?php
require_once '../global/conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hoja de estilos CSS -->
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Fuente de la página -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@400;800&display=swap" rel="stylesheet">

    <!-- Link de la página Fontawesome -->
    <script src="https://kit.fontawesome.com/0593e7a56d.js" crossorigin="anonymous"></script>

    <!-- Icono de la página -->
    <link rel="shortcut icon" href="../img/icono-pokedex.png" type="image/x-icon">
    <title>Pokedex</title>
</head>

<body>
    <nav>

        <?php if (isset($_SESSION['usuario'])) { ?>
            <div class="contenedor__banner" id="banner">
                <img class="banner__pokedex" src="../img/logo-pokedex.png" alt="logo pokedex">
            </div>
            <div class="mensaje__bienvenida">
                <?php echo "Bienvenid@ " . $_SESSION['usuario']; ?>
                <a href="../validacion/cerrar-sesion.php" title="Cerrar Sesión">
                    <i class="fa-sharp fa-solid fa-power-off"></i>
                </a>
            </div>

    </nav>

<?php } ?>