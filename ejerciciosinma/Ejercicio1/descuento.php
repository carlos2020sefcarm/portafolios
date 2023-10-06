<?php
$c=$_GET["cantidad"];
$d=$_GET["dinero"];
$t=$_GET["descuento"];
$IVA=$_GET["IVA"];

$cd=($c*$d);
$calculo=round($cd*$t/100,2);
$final=$cd-$calculo;
echo "Te ahorras ".$calculo. " euros";
echo "<br> Precio final sin impuesto ".$final ."€";
echo "<br> el IVA aplicado es " .$IVA . " %";
$iva=round($final*$IVA/100,2);
echo "<br> IVA ". $iva. "€";
echo "<br> Precio total con impuestos: ".($final+$iva). "€";


?>