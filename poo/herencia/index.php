<?php

include("humano.php");
include("mujer.php");
include("hombre.php");



$sujeto_1 = new Mujer();
$sujeto_1 ->setGenero("mujer");

$sujeto_1 -> sexo();

echo "<br><br>";

$sujeto_2 = new Hombre();
$sujeto_2 ->setGenero("hombre");

$sujeto_2 -> sexo();




?>