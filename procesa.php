<?php

include "funciones.php";

echo " <p> archivo que procesa los datos </p> ";
// archivo que recibe los datos del formulario
$minombre = $_POST ["nombre"] ; //imprimo el nombre
$miedad = $_POST ["edad"] ; //imprimo el edad
$miemail = $_POST ["email"] ; //imprimo el email

echo "el usuario " . $minombre . " tiene " . $miedad .  " años " . " y su email es " . $miemail; 

echo "<br>";

echo trigo2 ($miedad);

?>