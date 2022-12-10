<?php
require_once '../global/config.php';

try {
    $con = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);
    // echo "<h2 style='text-align:center; color:green;'>Conexión establecida...</h2>";
} catch (\Throwable $th) {
    die("No se pudo establecer la conexión: " . $th->getMessage());
}