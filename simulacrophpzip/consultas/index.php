<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>

</head>
<body>

<h1>Formulario de Contacto</h1>
<form action="" method="post" enctype="multipart/form-data">
<label for="nombre">Nombre de Usuario:</label>
<input type="text" id="nombre" name="nombre" ><br><br>

<label for="telefono">Teléfono:</label>
<input type="tel" id="telefono" name="telefono" ><br><br>

<label for="email">Correo Electrónico:</label>
<input type="email" id="email" name="email"><br><br>

<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" ><br><br>

<label for="consulta">Consulta:</label>
<textarea id="consulta" name="consulta" rows="4" ></textarea><br><br>

<label for="curriculum">Currículum (PDF o Word):</label>
<input type="file" id="curriculum" name="curriculum" accept=".pdf, .doc, .docx"><br><br>

<input type="submit" name="grabar" value="enviar">
<input type="reset" name="vaciar" value="borrar">
</form>
<br>
<form action="" method="post">
    <label for="consultar_1">introduce numero registro</label><br>
    <input type="number" step="1" id="consulta_1" name="consulta_1"><br><br>
    <button type="submit" value="consultar_registro">consultar_registro</button><br><br>
    <button name="leer" >leer</button>
</form>





</body>
</html>

<?php

include ("procesar.php");

if (isset($_POST["grabar"]))
{
    enviado();
}

if (isset($_POST["leer"]))
{
    leer_fichero();
}

if(isset($_POST["consulta_1"]))
{
    leer_registro();
}

?>