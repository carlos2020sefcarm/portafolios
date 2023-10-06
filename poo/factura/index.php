<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factura</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="fecha">fecha</label>
        <input type="date" name="fecha" id="fecha" required>
        <label for="numero_factura">numero de factura</label>
        <input type="number" name="numero_factura" id="numero_factura" step="1" min="1" required>
        <label for="precio_sin_impuestos">precio sin impuestos</label>
        <input type="number" name= "precio_sin_impuestos" id="precio_sin_impuestos" step = "0.01" min= "0.01" required>
        <button type="submit" name="calcular"> calcular </button>
    </form>

</body>
</html>

<?php

include ("factura.php");

if ( isset($_POST["calcular"])){



    

    $fecha = $_POST['fecha'];
    $numerofactura = $_POST['numero_factura'];
    $precio_sin_impuestos =$_POST['precio_sin_impuestos'];





    $factura_1= new Factura();

    $factura_1->setFecha($fecha);
    $factura_1->setNumeroFactura($numerofactura);
    $factura_1->setPrecioSinImpuestos($precio_sin_impuestos);

    echo $factura_1 ->calcular();


}



?>