
<?php


function enviado()
{
    $registro = $_POST["nombre"] . ";" . $_POST["telefono"] . ";" . $_POST["email"] . ";" . $_POST["fecha_nacimiento"] . ";" . $_POST["consulta"] . "\n"; 



$archivo = fopen("almacen.csv","a");
fwrite($archivo,$registro);


}

function leer_fichero()
{
  $archivo = fopen("almacen.csv","r");
  $numero_lineas=0;
  while (!feof($archivo))
  {
    $linea = fgets($archivo); // extraigo linea
    $columnas = explode(";",$linea); // creo array de columnas
    echo "el usuario " . $columnas[0] . " con telefono " . $columnas[1] . " y con email " . $columnas[2] . " ha hecho la siguiente consulta " . $columnas[4];

    $numero_lineas = $numero_lineas+1;
    echo $numero_lineas;
  }
fclose($archivo);

}

function leer_registro()

{ 
  $archivo = fopen("almacen.csv","r");
  $numero_lineas=0;
  while (!feof($archivo))
  {

    $linea = fgets($archivo); 
    $numero_lineas = $numero_lineas+1;
    $columnas = explode(";",$linea);
    if($numero_lineas==$_POST["consulta_1"])

    {
        
        echo "<br> Linea " . $numero_lineas . "--> el usuario " . $columnas[0] . " con telefono " . $columnas[1] . " y con email " . $columnas[2] . " ha hecho la siguiente consulta " . $columnas[4];

    }

  }
  fclose($archivo);
}

?>