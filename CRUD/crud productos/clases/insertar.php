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



if (!mysqli_select_db($conexion, 'productos')) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}


$inserto_primero = 'INSERT INTO `producto`( `producto`, `codigo`, `descripcion`, `precio`) VALUES (´fasdf´,`asdfasd`,`df`,`2655`)'; 


if (!$inserto_primero) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    exit;
} else{ echo  "el inserto se realizo satisfactoriamente ";}

mysqli_close($conexion);




?>