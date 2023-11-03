<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulacro</title>
</head>
<body>
    <h1>Simulacro  Aprendizaje 2</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" min="0" max="100">
        <label for="texto">Archivo:</label>
        <input type="text" name="archivo" id="archivo">  
        <label for="texto2">Texto:</label>
        <input type="text" name="texto" id="texto">  
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
        $solohora = date("h")+2;
        $solofecha = date("d-m-Y");
        $solominutos = date("m");
        $fechacompleta = $solofecha . "_" . $solohora . $solominutos ;

        $nombrearchivo_origen = $_POST["archivo"];

        $nombrearchivo= $nombrearchivo_origen . "_" . $fechacompleta ;

        $archivo_final = $nombrearchivo . ".txt";
        
        $a = fopen($archivo_final,"w");

        fclose($a);

    }

    function funcionBoton2() 
    {
     $archivo_final=$_POST["archivo"];   
     fopen($archivo_final,"a");
     $documento = $_POST["texto"];
     fwrite($archivo_final,'/n . $documento');


    }

    function funcionBoton3() 
    {
        $archivo_final=$_POST["archivo"];   
        fopen($archivo_final,"r");
        echo filesize($archivo_final);
    }

    function funcionBoton4() 
    {
      
    }
    ?>

