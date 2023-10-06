<?php
$numero1=$_POST["numero1"];
$numero2=$_POST["numero2"];

$radio=$numero1;

$area = round(pi()*pow($radio,2),2);
echo "el area del circulo de radio " . $radio ." es ". $area ."<br>"; 
$perimetro = round(2*pi()*$radio,2);
echo "el perimetro del cirulo de radio " . $radio . " es " . $perimetro . "<br>";

$dias_mensuales=["31","28","31","30","31","30","31","31","30","31","30","31"];

for ($n=0; $n<=count($dias_mensuales)-1; $n++)
{
echo "El mes -> " .$n+1 . " tiene ". $dias_mensuales[$n] ." dias" ."<br>";}
;

for ($n=1; $n<=$numero2; $n++)
 { echo pow($numero1,$n) . "<br>"; }

$factoriales_numero1=1;
 for ($n=$numero1; $n>=1; $n--){
    $factoriales_numero1 = $factoriales_numero1*$n;
    
  }
echo "<br>" . $factoriales_numero1;

$factoriales_numero2=1;
 for ($n=$numero2; $n>=1; $n--){
    $factoriales_numero2 = $factoriales_numero2*$n;
    
  }
echo "<br>" .$factoriales_numero2;

?>