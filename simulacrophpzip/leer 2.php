<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lectura y escritura de arcivos desde php</title>
</head>
<body>
 <h1>escritura que no sobreescriba</h1>    
</body>
</html>



<?php

$nuevocontenido = "un texto que vamos a agregar \n";
// leer todo el contenido actual del archivo 
$contenidoactual = file_get_contents("texto.txt");
//concateno los dos textos
$nuevocontenido = $nuevocontenido . $contenidoactual;
$nc = file_put_contents("texto.txt",$nuevocontenido);
echo " <br> el numero total de caracteres es : ". $nc;
echo "<br> la ultima modificacion fue " . date("d/m/Y H:i:s.",filemtime("texto.txt"));
copy("texto.txt","nuevotexto.txt"); //duplicamos el archivo
echo "<br>" . filetype("texto.txt");
echo "<br>" . filesize("texto.txt");
echo "<br>";
if (file_exists("texto.txt")){
    echo " el archivo ya existe ";
}

if (!file_exists("curriculos")){
    mkdir("curriculos");
}
 unlink("nuevotexto.txt");// borrar archivo (delete)
$stat = stat("texto.txt");
echo "Access time: " . $stat["atime"];
echo "<br>Modification time: " . $stat["mtime"];
echo "<br>Device number: " . $stat["dev"];

foreach ($stat as $x  => $val )
{
    echo $x." = ". $val . "<br>";
}
echo disk_free_space("C:"); // espacio libre en disco
echo "<br>";
echo fileperms("texto.txt");

?>