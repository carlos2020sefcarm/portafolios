<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form method="POST">
    <label>primer numero</label><br>
    <input type="number" required step="1"id="primer_numero" name="primer_numero"><br><br>
    <label>segundo numero</label><br>
    <input type="number" required step="1" id="segundo_numero" name="segundo_numero"><br><br>
    <button  type="submit" name="suma">suma</button>
    <button  type="submit" name="resta">resta</button>
    <button  type="submit" name="multiplica">multiplica</button>
    <button  type="submit" name="divide">divide</button>
    <br><br>

</form>

</html>

<?php

include("calculos.php");

$numeros = new Calcular();

$numeros->setValor1($_POST["primer_numero"]);
$numeros->setValor2($_POST["segundo_numero"]);




if (isset($_POST['suma'])){
    echo "la suma de ". $numeros->getValor1()." y de ". $numeros->getValor2(). " es " . $numeros->getValor1() + $numeros->getValor2() . "<br>";
  }
 if(isset($_POST['resta'])){
    echo "la resta de ". $numeros->getValor1()." y de ". $numeros->getValor2(). " es " . $numeros->getValor1() - $numeros->getValor2() . "<br>";
}
  
  if(isset($_POST['multiplica'])){
    echo "la multiplicacion de ". $numeros->getValor1() ." y de ". $numeros->getValor2() . " es " . $numeros->getValor1() * $numeros->getValor2() . "<br>";
}

if (isset($_POST['divide'])){
    echo "la division de ". $numeros->getValor1() ." y de ". $numeros->getValor2() . " es " . $numeros->getValor1() / $numeros->getValor2() . "<br>";
  }











?>