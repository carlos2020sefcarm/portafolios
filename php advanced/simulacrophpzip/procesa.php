<?php
$fecha1 = $_POST['fecha1'];
$fecha1 =strtotime($fecha1);
$f_nacimiento =date("d-m-y",$fecha1);
echo $f_nacimiento;//aqui la fecha es un texto
$f_nacimiento =strtotime($f_nacimiento);//lo convierte en numero para operar
echo "<br><br>";
$fecha2 = date("d-m-y");// aqui la fecha es texto
echo $fecha2;
$fecha_actual= strtotime($fecha2);//lo convierte en numero para operar
echo "<br><br>";
echo strtotime($fecha2);//convierto cadena a tiempo
echo "<br><br>";


if(isset($_POST['boton']))
{

    diferencia_fecha($f_nacimiento,$fecha_actual);
} 



function diferencia_fecha($f1,$f2){
 
    $diferencia_segundos = $f2-$f1;
    $diferencia_dias = floor($diferencia_segundos/60/60/24);
    echo  " la diferencia es de " . $diferencia_dias ." dias";
    $añosvividos =$diferencia_dias/365;
    echo "<br><br>";
    echo floor($añosvividos);
   
}



?>