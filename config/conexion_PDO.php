<?php
try {
    $conexion = new PDO("mysql:host=127.0.0.1;dbname=sistema_escolar_db", "root", "");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>