
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
    <form action="" method="POST">
        
        <label>nombre</label><br><br>
        <input type="text" id="nombre" name="nombre" required ><br><br>
        <label>direccion</label><br><br>
        <input  type="text" id="direccion" name="direccion" required><br><br>
        <label>NIF</label><br><br>
        <input type="text" id="NIF" name="NIF" minlenght="9" maxlength="9" required ><br><br>
        <label>numero_factura</label><br><br>
        <input  type="number" step="1" id="numero_factura" name="numero_factura" required><br><br>
        <label>fecha de factura</label><br><br>
        <input type="date" id="fecha_factura" name="fecha_factura" ><br><br>
        <label>importe sin impuestos </label><br><br>
        <input  type ="number" id="importe_sin_impuestos" name="importe_sin_impuestos"><br><br>
        <input type="submit" value="enviar">
    
    </form>


</body>
</html>


<?php
include("Trabajador.php");
include("Empleado.php");
include("Gerente.php");
include("Factura.php");

$factura_1 = new Factura();
$factura_1-> setNumeroFactura($_POST["numero_factura"]);
$factura_1->setFecha($_POST["fecha_factura"]);
$factura_1->setImporteSinImpuestos($_POST["importe_sin_impuestos"]);


echo "<br>";

echo $factura_1->importe_de_factura($factura_1->getImporteSinImpuestos());

echo "<br>";

$fecha_actual =strtotime($_POST["fecha_factura"]);

echo date("d-m-y",$fecha_actual);

$empleado_1 = new Empleado();
$empleado_1->setNombre("perico");
$empleado_1->setDireccion("calle de la mierda");
$empleado_1->setEmail("esclavo@gmail.com");
$empleado_1->setNIF("12345678");



$gerente_1 = new Gerente();
$gerente_1->setNombre("josemari");
$gerente_1->setDireccion("calle maravillas");
$gerente_1->setEmail("empresaurio@gmail.com");
$gerente_1->setNIF("87654321");
$gerente_1->setCargo("CEO");

echo "<br>";


echo "el nombre  del empleado es " . $empleado_1->getNombre() . " con direccion " . $empleado_1->getDireccion() . " y con el email " . $empleado_1->getEmail() . " y un NIF " . $empleado_1->getNIF() . " y su salario es " . $empleado_1->sueldo();


echo "<br>";


echo "el nombre  del gerente es " . $gerente_1->getNombre() . " con direccion " . $gerente_1->getDireccion() . " y con el email " . $gerente_1->getEmail() . " y un NIF " . $gerente_1->getNIF() . " y el cargo ". $gerente_1->getCargo() ." y su salario es " . $gerente_1->sueldo();



?>



