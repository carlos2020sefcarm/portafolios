<?php

$servidor = "localhost";
$usuarios = "root";
$clave = "1234";
$basededatos = "zoologico";


$conectar = new PDO ($servidor, $usuario, $clave, $basededatos);

if(!$conectar) {
    die("conexión fallida: " . mysqli_connect_error());
}
echo "conexion exitosa";



?>