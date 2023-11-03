<?php
require_once("config/Configuracion.php");


class Modelocomun{

    public $bd;

    public function __construct(){
            //$a = new Configuracion();
            //$this->bd = $a->conexion();
            $this->bd = Configuracion::conexion(); 
        }


        function consultar(){
                $consulta = $this->bd->query ("SELECT * FROM coche;");
                while ($filas = $consulta->fetch_assoc()){
                        $datos[]=$filas;
                
                }
                foreach($datos as $dato){
                echo"<tr>";
                echo "<td>" . $dato["marca"] . " "."</td>";
                echo "<td>" . $dato["modelo"] . " "."</td>";
                echo "<td>" . $dato["color"] . " "."</td>";
                echo "<td>" . $dato["año"] . " "."</td>";
                echo"</tr>";      
                }
        }



        function insertar(){
        
        
        
        }
        
        
        function eliminar(){
        
        
        
        
        }
        
        
        function actualizar(){
        
        
        
        
        
        }


}



?>
