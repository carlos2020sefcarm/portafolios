
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action=" ">
    <legend>articulo</legend><br>
    <label>nombre</label><br>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label>precio</label><br>
    <input type="number" step="0.01" id="precio" name="precio"><br><br>
    <label>descuento</label><br>
    <input type="number" id="descuento" name="descuento" step="1"><br><br>
    <button type="submit">enviar</button><br><br>
    </form>

</body>
</html>

<?php
 include("articulos.php");
 include("articulodescontado.php");

 if ($_POST["descuento"] == null || $_POST["descuento"] == " ")
    { 
        $articulo_1 = new Articulos();
        $articulo_1->setNombre($_POST["nombre"]);
        $articulo_1->setPrecio($_POST["precio"]);
        
        echo "el precio de producto " . $articulo_1->getNombre() . " es " . $articulo_1->poner_precio_sin_descuento(). " euros.";
    }
    else
    {
        $articulodescontado_1 = new Articulodescontado();
        $articulodescontado_1->setNombre($_POST["nombre"]);
        $articulodescontado_1->setPrecio($_POST["precio"]);
        $articulodescontado_1->setDescuento($_POST["descuento"]);
   
        echo "el precio de producto " . $articulodescontado_1->getNombre() . " es " .
        $articulodescontado_1->poner_precio_descuento($articulodescontado_1->getDescuento(),$articulodescontado_1->getPrecio()). " euros.";
    }

 


 








?>