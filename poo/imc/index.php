
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST">
    <label for="altura">altura</label><br>
    <input type="number" required step="0.01" id="altura" min="0.30" name="altura"><br>
    <label for="peso">peso</label><br>
    <input type="number" required step="0.1" id="peso"  min ="3" name="peso"><br><br>
    <button type="submit"> enviar </button>
    </form>


</body>
</html>




<?php

include("imc.php");

$individuo = new datos;

$individuo->setAltura($_POST["altura"]);
$individuo->setPeso($_POST["peso"]);


echo " el imc es " . round($individuo->getPeso() / pow(($individuo->getAltura()/100),2),2);


?>