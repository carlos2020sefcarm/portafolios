<?php

$nombre = "sebas";
$apellido = "galvez";
$a = 4;
$b = 5;
echo "<h1>hola mundo</h1><br>";
echo "<br>"; 
echo "la suma de $a + $b es " . $a+$b;
echo "<br><br> mi nombre es " . $nombre . " " . $apellido;
echo "<hr>";

if ($a>5)
{
  echo "<br>la variable a es mayor que 5<br>";
}
else
{
  echo "<br>la variable a es menor que 5<br>";   
}


$fecha = date ("d - m - y <br>");
echo $fecha;
$mes = date ("m");
echo "<br>Mes actual es " . $mes ."<br>";

if ($mes>=6)
{
    echo "estamos en el segundo semestre";
}
else
{
    echo " estamos en el primer semestre";
}

$hora = date ("h");

echo "<br>";

if ($hora +2 >=12)
{
    echo "buenas tardes";
}
else
{
    echo " buenos dias";
}




?>