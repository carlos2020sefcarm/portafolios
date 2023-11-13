<?php
require_once("config/Configuracion.php");


class Modelocomun{

    private $bd;
    private $datos;
    

    public function __construct(){
            //$a = new Configuracion();
            //$this->bd = $a->conexion();
            $this->bd = Configuracion::conexion();
            $this->datos=array(); 
        }


        function consultar(){
                $consulta = $this->bd->query ("SELECT * FROM coche;");
                while ($row = $consulta->fetch_assoc()){
                        $datos[]=$row;
                
                }
                foreach($datos as $dato){
                echo "<tr>";
                echo "<td>" . $dato["id"] . " "."</td>";
                echo "<td>" . $dato["marca"] . " "."</td>";
                echo "<td>" . $dato["modelo"] . " "."</td>";
                echo "<td>" . $dato["color"] . " "."</td>";
                echo "<td>" . $dato["año"] . " "."</td>";
                echo "<td>" . ' <form action="" method="post>' .'<input type="submit" value="actulizar">' .' </form>' . "</td>";
                echo "<td>" . '<input type="submit" value="eliminar">' . "</td>";
                echo"</tr>";      
                }
        }



        function insertar($id,$marca,$modelo,$color,$año){

                $inserto = $this->bd->query ('INSERT INTO coche ("id","marca","modelo","color","año") VALUES ('.$id.','.$marca.','.$modelo.','.$color.','.$año.');');
                
        }
        
        
        function eliminar(){


                 $eliminado = $this->bd->query ('DELETE FROM  "coche"  WHERE $id = $dato["id"];');
        
        
        
        }
        
        
        function actualizar(){


                $actualizado =$this->bd->query('UPDATE "coche" SET "id"="$id", "marca"="$marca", "modelo"="$modelo", "color"="$color", "año"="$año"');
        
        
        
        
        
        }


}



?>
