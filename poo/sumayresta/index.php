<?php

 include("suma.php");
 include("resta.php");

$suma = new Sumar();
$suma ->setValor1(2);
$suma ->setValor2(6);

$suma->operar();

echo "<br><br>";

$resta =  new Resta();
$resta -> setValor1(9);
$resta -> setValor2(45);

$resta ->operar();

?>