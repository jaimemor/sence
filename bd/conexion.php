<?php

$usuario = "";
$clave = "";
$db_nombre = "";
$host = "";

try {
   $conn = new PDO("mysql:host=$host;dbname=$db_nombre", $usuario, $clave);
} catch (PDOException $e) {
    echo "error base de datos no encontrada";
}

?>