<?php

$dni = $_POST ["dni"];
$letra = $_POST ["letra"];

$orden_letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];

$calculando = $dni%23;

    if ($letra == $orden_letras[$calculando])
     {echo "dni correcto";}
    else {echo"dni incorrecto";}

?>