<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nombre del alumno</title>
</head>
<body>
    <h1>Ev. Aprendizaje 2 UF1286</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero">
        <label for="archivo">Archivo:</label>
        <input type="text" name="archivo" id="archivo">  
        <label for="texto">Texto:</label>
        <input type="text" name="texto" id="texto">  
        <button type="submit" name="accion" value="boton1">Botón 1</button>
        <button type="submit" name="accion" value="boton2">Botón 2</button>
        <button type="submit" name="accion" value="boton3">Botón 3</button>
        <button type="submit" name="accion" value="boton4">Botón 4</button>
        <button type="submit" name="accion" value="boton5">Botón 5</button>
        <button type="submit" name="accion" value="boton6">Botón 6</button>
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
            case 'boton5':
                funcionBoton5();
                break;
            case 'boton6':
                funcionBoton6();
                break;
        }
    }

    function funcionBoton1() 
    {

        $carpeta='Carga_de_archivos/';

        if ( !file_exists($carpeta))
        {
        
        mkdir ($carpeta,0777, true);
        
        }
        
        if(!file_exists($_POST["archivo"])){
        
        $nuevoarchivo = $_POST["archivo"];

        $contiene = $_POST["texto"];

        $archivo_final = fopen("Carga_de_archivos/$nuevoarchivo.txt","w");

        fwrite($archivo_final,$contiene);
        
        $contenido = file_get_contents("Carga_de_archivos/$nuevoarchivo.txt");

        echo "se creo el archivo " . $nuevoarchivo . " con contenido " . $contenido;

        }else{ echo "el archivo no existe";
            }

    }

    function funcionBoton2() 
    {



        $viejonombre = $_POST["archivo"];
        
        $fecha = date("Y-m-d H.i.s");
        
        $otronombre = explode(".",$viejonombre);



        $archivocambiado = $otronombre[0] . "_" . $fecha . ".txt";

        
        rename("Carga_de_archivos/$viejonombre","Carga_de_archivos/$archivocambiado");
        


    }

    function funcionBoton3() 
    {

        $nuevoarchivo = $_POST["archivo"];
       

        if (file_exists("Carga_de_archivos/$nuevoarchivo")) {
            unlink("Carga_de_archivos/$nuevoarchivo");
            echo "el archivo ". $nuevoarchivo . " ha sido borrado";}
            else{ echo "no existe";}

    }

    function funcionBoton4() 
    
    {
        $nuevoarchivo = $_POST["archivo"];

        $contenido= file_get_contents("Carga_de_archivos/$nuevoarchivo");

        echo $contenido;

    

    }
    function funcionBoton5() 
    {
        
        echo "<br>Contenido actual de la carpeta<br>";
        
        $archivos=scandir("Carga_de_archivos/");
        

        echo "<table>";
        echo "<theader>";
        echo "<th>id</th>";
        echo "<th>nombre</th>";
        echo "<th>tamaño</th>";
        echo "<th>fecha_modificacion</th>";
        echo "</theader>";
            
        
        for($i=2;$i<count($archivos);$i++)
        {

           echo "<tr>";

                echo "<td>" . $i-1 ."</td>";
                echo "<td>" . $archivos[$i] ."</td>";
                echo "<td>" . round((filesize("Carga_de_archivos/$archivos[$i]")/1024),2) ."kb" . "</td>";
                echo "<td>" . date("Y-m-d H:i:s",filemtime("Carga_de_archivos/$archivos[$i]")).  "</td>";

           echo "</tr>"; 
        }    
        
        echo"</table>";
        
                }
        
            
    
    function funcionBoton6() 
    {


        $numeroarchivo = $_POST["numero"];
        
        $lista = scandir("Carga_de_archivos/");
       

        if ($_POST["numero"]<count($lista)) {
          unlink("Carga_de_archivos/".$lista[$_POST["numero"]+1]);
            echo "el numero de archivo ".$numeroarchivo . " ha sido borrado";}
            else{ echo "no existe";}

            echo "<br>";


            echo "<br>Contenido actual de la carpeta<br>";
        
            $archivos=scandir("Carga_de_archivos/");
            
    
            echo "<table>";
            echo "<theader>";
            echo "<th>id</th>";
            echo "<th>nombre</th>";
            echo "<th>tamaño</th>";
            echo "<th>fecha_modificacion</th>";
            echo "</theader>";
                
            
            for($i=2;$i<count($archivos);$i++)
            {
    
               echo "<tr>";
               
               echo "<td>" . $i-1 ."</td>";
               echo "<td>" . "$archivos[$i]" ."</td>";
               echo "<td>" . filesize("Carga_de_archivos/$archivos[$i]") . "</td>";
               echo "<td>" . date("Y-m-d H:i:s",filemtime("Carga_de_archivos/$archivos[$i]")).  "</td>";
    
               echo "</tr>"; 
            }    
            
            echo"</table>";
            
                    }





    ?>



</body>
</html>