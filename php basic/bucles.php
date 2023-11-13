<?php
$sumatorio=15;
for ($i=0; $i<=80; $i++)
{
    $sumatorio=$sumatorio+$i;
}
echo $sumatorio ."<br>";


$resultado = 5;
while ($resultado<63)
{
 $resultado= $resultado*2;
}
echo $resultado . "<br>";



$secuencia_letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
$dni = 75715229;
$resultado_dni = $dni%23;

echo $dni . "-" . $secuencia_letras[$resultado_dni] . "<br>";


for ($i=1 ; $i <=100 ; $i++)
if($i%2==0) {
            echo $i . "<br>";
            }

 $nota=-15;
 
 switch(true)
 {case $nota>=0 and $nota<5:
      echo "suspenso";
        break;
  case $nota>=5 and $nota<6:
       echo "suficiente";
        break;
  case $nota>=6 and $nota<7:
       echo "bien";
        break;
   case $nota>=7 and $nota<9:
       echo "notable";
        break;
    case $nota>=9 and $nota<=10:
       echo "sobresaliente";
        break;
     default: echo "nota incorrecta";
        break;   
 }
 echo "<hr>";

 $combinacion = [];
 while (count($combinacion)<6) 
{
    $aleatorio = rand(0,49);
    if (!in_array($aleatorio,$combinacion))
        {
            array_push($combinacion,$aleatorio);
        }
 }
    sort($combinacion);
    
    $i=0;
    echo "la combinacion es: ";
    while($i<6)
    {
        echo $combinacion [$i] . " ";
        $i++;
    }
        $complementario = rand(0,49);

    

    echo "reintegro: " . rand(0,9);

?>