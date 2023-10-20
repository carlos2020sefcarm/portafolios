
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simulacro examen</title>
</head>
<body>
    

<form action="" method="post">
<label>nombre completo</label><br><br>
<input type="text" id="nombre_completo" name="nombre_completo" required><br><br>
<label>cif</label><br><br>
<input type="text" id="cif" name="cif" maxlength="8" minlength="8" placeholder="00000000A" patern="[A-Za-z]{1}" required><br><br>
<label>direccion</label><br><br>
<input type="text" id="direccion" name="direccion" required><br><br>
<label>email</label><br><br>
<input type="email" id="email" name="email" required><br><br>
<label>telefono</label><br><br>
<input type="tel" minlenght="9" maxlength="9" step="1" id="telefono" name="telefono" required><br><br>
<label> numero de factura</label><br><br>
<input type="number"  step ="1" id="numero_factura" name="numero_factura" required><br><br>
<label>importe</label><br><br>
<input type="number" step="0.01" id="importe" name="importe"><br><br>
<label>fecha de emision</label><br><br>
<input type="date" id="fecha emision" name="fecha_emision" required><br><br>
<input type="submit" name="boton" id="boton"><br><br>
</form>

</body>
</html>

<?php
include("Trabajador.php");
include("Empleado.php");
include("Gerente.php");
include("Factura.php");

$empleado_1 = new Empleado();
$empleado_1->setNombreCompleto($_POST["nombre_completo"]);
$empleado_1->setCif($_POST["cif"]);
$empleado_1->setDireccion($_POST["direccion"]);
$empleado_1->setEmail($_POST["email"]);
$empleado_1->setTelefono($_POST["telefono"]);

$factura_1 = new Factura();
$factura_1->setNumeroFactura($_POST["numero_factura"]);
$factura_1->setFechaEmision($_POST["fecha_emision"]);
$factura_1->setImporte($_POST["importe"]);

$empleado_1->datos_personales($empleado_1->getNombreCompleto(),$empleado_1->getCif(),$empleado_1->getDireccion(),$empleado_1->getEmail(),$empleado_1->getTelefono());

echo $factura_1->calcular($factura_1->getImporte());


?>