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

<?php

$creando = fopen("archivo.txt","x+");
$texto = " hola mundo " ;
fwrite($creando,$texto);
echo fread($creando,filesize("archivo.txt"));
fclose($creando);
fopen("archivo.txt","a");
$añadiendo = fwrite("archivo.txt","/n este es el nuevo contenido ");
copy("archivo.txt","copia.txt");
rename("copia.txt","respaldo.txt");

fread()


?>