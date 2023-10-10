

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST">
        <legend>directivo</legend>
        <label>Nombre</label><br>
        <input type ="text" required id="nombre_directivo" name="nombre_directivo"><br>
        <label>Apellido primero</label><br>
        <input type="text" required id="apellido_directivo" name="apellido_directivo"><br>
        <label>edad</label><br>
        <input type="number" step="1" required id="edad_directivo" name="edad_directivo"><br>
        <label>NIF</label><br>
        <input type="text" maxlenght="8" minlenght="8" pattern="[0-9]{7}[A-Z,a-z]{1}" required id="nif_directivo" name="NIF_directivo"><br>
        <label>sueldo</label><br>
        <input type ="number" step="0.01" id="sueldo_directivo" name="sueldo_directivo"><br>
        <label> años de antiguedad </label><br>
        <input type="number" step="1" required id="antiguedad_directivo" name="antiguedad_directivo"><br>

        <legend>empleado</legend>
        <label>Nombre</label><br>
        <input type ="text" required id="nombre_empleado" name="nombre_empleado"><br>
        <label>Apellido</label><br>
        <input type="text" required id="apellido_empleado" name="apellido_empleado"><br>
        <label>edad</label><br>
        <input type="number" step="1" required id="edad_empleado" name="edad_empleado"><br>
        <label>NIF</label><br>
        <input type="text" maxlenght="8" minlenght="8" pattern="[0-9]{7}[A-Z,a-z]{1}" required id="nif_directivo" name="NIF_empleado"><br>
        <label>sueldo</label><br>
        <input type ="number" step="0.01" id="sueldo_empleado" name="sueldo_empleado"><br>
        <label> años de antiguedad </label><br>
        <input type="number" step="1" required id="antiguedad_empleado" name="antiguedad_empleado"><br>


        <button type="submit" name ="boton" id="boton">enviar</button>

        </form>






</body>
</html>
<?php
 
 include ("Datos.php");
 include ("Empleados.php");
 include ("Directivo.php");
 
 $empleado_1 = new Empleado();
 $empleado_1->setNombre($_POST["nombre_empleado"]);
 $empleado_1->setApellido($_POST["apellido_empleado"]);
 $empleado_1->setEdad($_POST["edad_empleado"]);
 $empleado_1->setNIF($_POST["NIF_empleado"]);
 $empleado_1->setSueldo($_POST["sueldo_empleado"]);
 $empleado_1->setAntiguedad($_POST["antiguedad_empleado"]);


 $directivo_1 = new Directivo();
 $directivo_1->setNombre($_POST["nombre_directivo"]);
 $directivo_1->setApellido($_POST["apellido_directivo"]);
 $directivo_1->setEdad($_POST["edad_directivo"]);
 $directivo_1->setNIF($_POST["NIF_directivo"]);
 $directivo_1->setSueldo($_POST["sueldo_directivo"]);
 $directivo_1->setAntiguedad($_POST["antiguedad_directivo"]);


 if ($empleado_1->getSueldo() > $directivo_1->getSueldo())
 {
    $empleado_1->quien_ganara_mas();
 }

 if ($empleado_1->getSueldo() < $directivo_1->getSueldo())
 {
    $directivo_1->$quien_ganara_mas();
 }

 if ($empleado_1->getSueldo() == $directivo_1->getSueldo())
 {
    echo " tienen el mismo sueldo ";
 }

?>