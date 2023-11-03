<?php


$servidor ="localhost";
$usuario = "carlos";
$clave = "1234";
$basededatos= "productos";

$conexion = new mysqli("localhost", "carlos", "1234", "productos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $conexion->host_info . "\n";


?>