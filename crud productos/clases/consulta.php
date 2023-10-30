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

//$conexion= config::conexion();

if (!mysqli_select_db( $conexion,'productos')) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}


$consulta_primera = "SELECT * FROM `producto`;"; 

$resultado_consulta_primera = mysqli_query($conexion,$consulta_primera);


if (!$resultado_consulta_primera) {
    echo "<br>Error de BD, no se pudo consultar la base de datos\n";
    exit;
}


while ($fila = mysqli_fetch_assoc($resultado_consulta_primera)) {
    echo $fila["producto"] . "<br>";
    echo $fila["codigo"] ."<br>";
    echo $fila["descripcion"] ."<br>";
    echo $fila["precio"] ."<br>";
}

mysqli_free_result($resultado_consulta_primera);

mysqli_close($conexion);

?>