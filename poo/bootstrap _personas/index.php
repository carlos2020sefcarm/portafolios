<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <legend>hombre</legend><br>
        <label>nombre</label><br>
        <input type="text" required name="nombre_hombre" id="nombre_hombre"><br><br>
        <label>primer_apellido</label><br>
        <input type="text" required name="primer_apellido_hombre" id="primer_apellido_hombre"><br><br>
        <label>segundo_apellido</label><br>
        <input type="text" required name="segundo_apellido_hombre" id="segundo_apellido_hombre"><br><br>
        <label>edad</label><br>
        <input type="number" required step="1" name="edad_hombre" id="edad_hombre"><br><br>
        
        <legend>mujer</legend><br>
        <label>nombre</label><br>
        <input type="text" required name="nombre_mujer" id="nombre_mujer"><br><br>
        <label>primer_apellido</label><br>
        <input type="text" required name="primer_apellido_mujer" id="primer_apellido_mujer"><br><br>
        <label>segundo_apellido</label><br>
        <input type="text" required name="segundo_apellido_mujer" id="segundo_apellido_mujer"><br><br>
        <label>edad</label><br>
        <input type="number" required step="1" name="edad_mujer" id="edad_mujer"><br><br>
        
        
        <button type="submit">enviar</button><br><br>
        

    </form>
</body>
</html>
<?php
 
 include("Personas_bt.php");
 include("Mujer.php");
 include("Hombre.php");

$sujeto_hombre = new Personas();
$sujeto_hombre->setNombre($_POST["nombre_hombre"]);
$sujeto_hombre->setPrimerApellido($_POST["primer_apellido_hombre"]);
$sujeto_hombre->setSegundoApellido($_POST["segundo_apellido_hombre"]);
$sujeto_hombre->setEdad($_POST["edad_hombre"]);


$sujeto_mujer = new Personas();
$sujeto_mujer->setNombre($_POST["nombre_mujer"]);
$sujeto_mujer->setPrimerApellido($_POST["primer_apellido_mujer"]);
$sujeto_mujer->setSegundoApellido($_POST["segundo_apellido_mujer"]);
$sujeto_mujer->setEdad($_POST["edad_mujer"]);


if( $sujeto_hombre->getEdad() > $sujeto_mujer->getEdad())
    {$sujeto_hombre->haz_echo();
    }
else if ( $sujeto_hombre->getEdad() < $sujeto_mujer->getEdad())
    {$sujeto_mujer->haz_echo();
    }
else 
    { echo " ambos tienen la misma edad ";
    }




?>