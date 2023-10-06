<?php
$numero_introducido = $_POST["numero"];
$numeronuevo;
$i=0;
while($i<=$numero_introducido)
    { $numeronuevo=$numero_introducido+1;} 

      
    echo $numeronuevo . " ". $numero_introducido . "<br>";

?>