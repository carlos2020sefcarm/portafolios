<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
<!-- el enctype indica como se va a encriptar -->

<label for="archivo">Selecciona archivos</label>
<!-- el label tiene cierre porque tiene texto, y el input no porque solo tiene atributos -->
<input type="file" name="archivo[]" id="archivo" multiple>
<!-- no olvides los corchetes en archivo, ya que al ser varios se considera array -->
<input type="submit" name="enviar" value="Enviar archivos">
</form>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{

$carpeta='Cargas de archivos/';

if ( !file_exists($carpeta))
{

mkdir ($carpeta,0777, true);
}

for($i=0; $i<count($_FILES['archivo']['name']); $i++)
{
//de que coleccion //nombre
move_uploaded_file($_FILES['archivo']['tmp_name'][$i],$carpeta.$_FILES['archivo']['name'][$i]);

}
}

?>
</body>
</html>