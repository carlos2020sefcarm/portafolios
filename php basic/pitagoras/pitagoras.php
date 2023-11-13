<?php

$cateto1= $_POST["cateto1"];
$cateto2= $_POST["cateto2"];

echo "la hipotenusa es " . round(sqrt(pow($cateto1,2)+pow($cateto1,2)),2);

?>