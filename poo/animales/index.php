<?php

include ("animales.php");
include ("caballo.php");
include ("pajaro.php");

$caballo_1 = new caballo;
$pajaro_1 = new pajaro;


$caballo_1 -> moverse();
 echo $pajaro_1 -> moverse();
 echo "<br><br>";
 echo $caballo_1 -> moverse();


?>