

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>"  method ="post" enctype="multipart/form-data">
    <label>envia formulario</label>
    <input type="file" name="archivo" id="archivo" > 
    <input type="submit" value="enviar archivo">  
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $carpeta_destino = "subidas"; 
 $tiempo=time();
    echo $año=date("Y",$tiempo);
    echo "<br>";
    echo $mes=date("m",$tiempo);
    echo "<br>";
    echo $dia=date("d",$tiempo);
    echo "<br>";
    $carpeta_destino=$carpeta_destino."/" . $año ."/" . $mes . "/" . $dia;
    echo $carpeta_destino;




    if (!file_exists($carpeta_destino))
    {
    mkdir($carpeta_destino,0777,true);
    }    
   if($_FILES["archivo"]["error"]==false and $_FILES["archivo"]["type"] =="applicaton/pdf" and $_FILES ["archivo"]["size"]<10000000);

}
echo "<br>";

if ($_FILES["archivo"]["error"]==false);
    {
    echo  "el archivo llamado ". $_FILES["archivo"]["name"] . " con tamaño " . $_FILES["archivo"]["size"] . " y su tipo es " . $_FILES["archivo"]["type"];
    }

move_uploaded_file($_FILES["archivo"]["tmp_name"],$carpeta_destino.$_FILES["archivo"]["name"]);

$elementos = scandir($carpeta_destino);
//print_r($elementos);
echo "<h2> el contenido actual de la carpeta es : </h2>";
$i=2;
while($i<count($elementos))

{
    echo " <br> archivo ". $elementos[$i];
    $i++;
}

if (rename($carpeta_destino,"uploads"))
{
    echo "se ha cambiado la carpeta de destino";
}
    else {
        echo "hubo un problema al cambiar carpeta de destino";
    }



?>