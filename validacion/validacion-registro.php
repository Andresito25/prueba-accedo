<?php
require_once '../global/conexion.php';

if  (isset($_POST['registrar'])) {
    $nombre_usuario = $_POST['nombre_usuario'];
    $clave = $_POST['clave'];
    $correo = $_POST['correo'];

    // print_r($_POST);

    $registrar = $con->prepare("INSERT INTO `usuarios` 
    (
        `nombre_usuario`,
        `clave`,
        `correo`,
        `fecha_registro`
    )
    VALUES 
    (
        :nombre_usuario,
        :clave,
        :correo,
        NOW()
    );");

    $registrar->bindParam(':nombre_usuario', $nombre_usuario);
    $registrar->bindParam(':clave', $clave);
    $registrar->bindParam(':correo', $correo);

    if($registrar->execute()) {
        echo "Usuario registrado correctamente";
        header("Refresh:3; ../app/ingreso.php");
    }else {
        echo "El usuario no fue registrado";
        $registrar = null;
        $con = null;
    }
}