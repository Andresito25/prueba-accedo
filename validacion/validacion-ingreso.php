<?php
require_once '../global/conexion.php';

if (isset($_POST['ingresar'])) {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $consultar = $con->prepare("SELECT * FROM `usuarios` WHERE `correo` = :correo AND `clave` = :clave");

    $consultar->bindParam(':correo', $correo);
    $consultar->bindParam(':clave', $clave);
    $consultar->execute();

    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);

    // print_r($resultado['nombre_usuario']);

    if ($resultado >= 1) {
        session_start();
        $_SESSION['usuario'] = $resultado['nombre_usuario'];
        header("Location: ../app/index.php");
        if($_SESSION['usuario'] == "") {
            header("Location: ../app/ingreso.php");
        }
    } else {
        echo "El usuario no existe";
        header("Refresh:3; ../app/ingreso.php");

        $consultar = null;
        $con = null;
    }
}
