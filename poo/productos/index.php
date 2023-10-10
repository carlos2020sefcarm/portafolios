<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form method="POST">
        <label>producto_1</label><br>
        <input type="text" required id="producto_1" name="producto_1" min="1"><br>
        <label>precio</label><br>
        <input type ="number" required id="precio_1" name="precio_1" step="0.01"><br>
        <label>stock</label><br>
        <input type="number" required id="stock_1" name="stock_1" min="0"><br>

        <label>producto_2</label><br>
        <input type="text" required id="producto_2" name="producto_2" min="1"><br>
        <label>precio</label><br>
        <input type ="number" required id="precio_2" name="precio_2" step="0.01"><br>
        <label>stock</label><br>
        <input type="number" required id="stock_2" name="stock_2" min="0"><br>

        <label>producto_3</label><br>
        <input type="text" required id="producto_3" name="producto_3" min="1"><br>
        <label>precio</label><br>
        <input type ="number" required id="precio_3" name="precio_3" step="0.01"><br>
        <label>stock</label><br>
        <input type="number" required id="stock_3" name="stock_3" min="0"><br><br>
        
    
        <button type="submit" name="boton" id="boton"> enviar </button>
    
    </form>

</body>
</html>
<?php

include("Productos.php");

$producto_1 = new Productos();
$producto_1 =$producto_1->setNombre($_POST["producto_1"]);
$producto_1 =$producto_1->setPrecio($_POST["precio_1"]);
$producto_1 =$producto_1->setStock($_POST["stock_1"]);

$producto_2 = new Productos();
$producto_2 =$producto_2->setNombre($_POST["producto_2"]);
$producto_2 =$producto_2->setPrecio($_POST["precio_2"]);
$producto_2 =$producto_2->setStock($_POST["stock_2"]);


$producto_3 = new Productos();
$producto_3 =$producto_3->setNombre($_POST["producto_3"]);
$producto_3 =$producto_3->setPrecio($_POST["precio_3"]);
$producto_3 =$producto_3->setStock($_POST["stock_3"]);


if($producto_1->getStock() == 0){
    $producto_1->no_queda();
} 

if( $producto_2->getStock() == 0 )
   {$producto_2->no_queda();} 


if ($producto_3->getStock() == 0 ){
    no_queda();
}

echo " el precio es " . $producto_1->getPrecio() + ($producto_1->getPrecio() * 0.21 ) + $producto_2->getPrecio() +  ($producto_2->getPrecio() * 0.21 ) +$producto_3->getPrecio() +  ($producto_3->getPrecio() * 0.21 );




?>