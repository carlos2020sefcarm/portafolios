<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulacro</title>
</head>
<body>
    <h1>Simulacro 2 Ev. Aprendizaje 2</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" min="0" max="100">
        <label for="texto">Archivo:</label>
        <input type="text" name="texto" id="texto">  
        <label for="texto2">Texto:</label>
        <input type="text" name="texto2" id="texto2">  
        <button type="submit" name="accion" value="boton1">Botón 1</button>
        <button type="submit" name="accion" value="boton2">Botón 2</button>
        <button type="submit" name="accion" value="boton3">Botón 3</button>
        <button type="submit" name="accion" value="boton4">Botón 4</button>
    </form>

    <?php
    if (isset($_POST['accion'])) 
    {
        $accion = $_POST['accion'];

        switch ($accion) {
            case 'boton1':
                funcionBoton1();
                break;
            case 'boton2':
                funcionBoton2();
                break;
            case 'boton3':
                funcionBoton3();
                break;
            case 'boton4':
                funcionBoton4();
                break;
        }
    }

    function funcionBoton1() 
    {
        $carpeta="Archivos/";
        $horamodificada = date("h",time())+2;
        $minutos = date ("m");
        $segundos =("s");
        $fecha= $horamodificada.$minutos.$segundos;
        
        if(!file_exists($carpeta)){
        
        mkdir($carpeta,0777,true);
        }
        
        
        if($_POST["texto"]!=""){
        
        if(!file_exists($carpeta.$_POST["texto"]."_".$fecha.".txt")){
        
        $archivo = $carpeta.$_POST["texto"]."_".$fecha.".txt";
        
        $archivo = fopen("$archivo","a+"); //Creamos el archivo con el nombre dado más la fecha y la hora en el directorio /Archivos/
        fclose($archivo);
        
        echo "Archivo $archivo creado.";
        
        }else{
        
        echo "Ya existe el archivo.";
        
        }
        }
        
        

    }

    function funcionBoton2() 
    {
       $nuevoarchivo = fopen($_POST["texto"],"a");
       fwrite($nuevoarchivo, $_POST["texto2"]);
       echo "texto añadido correctamente";

    }

    function funcionBoton3() 
    {
       echo file_get_contents($_POST)
    }

    function funcionBoton4() 
    {
      
    }
    ?>


</body>
</html>