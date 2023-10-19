
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form  action = '' method = 'POST' >

        <label action="index.php" method="POST"></label>
        <input type="textarea"  name="ingredientes">
        <label for=""></label>
        <input type="textarea" name="recetas">
        <input type="submit" name="boton" id="boton"> 

    </form>



    
</body>
</html>




<?php

include ("Postre.php");


$postre_1 = new Postre();
$requisito2 = $postre_1->obtener_ingredientes($_POST["ingredientes"]);
$postre_1->imprimir_ingredientes($requisito2);

$requisito1 = $postre->obtener_receta($_POST["recetas"]);






?>