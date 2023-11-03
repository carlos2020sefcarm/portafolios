<?php
        class Configuracion{
            
        

            public static function conexion(){
             $conexion = mysqli_connect("localhost","root","","vehiculos");

                if (!$conexion) {
                    die("Conexion fallida: " . mysqli_connect_error());
                }
                echo "Conexion exitosa"; 
                
                return $conexion;    
            }
            
            }
    
    

?>