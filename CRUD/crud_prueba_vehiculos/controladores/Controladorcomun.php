<?php

class Controladorcomun{


 public function seleccionar()
 { 
    require_once("modelos/Modelocomun.php");
    $modelo_comun1 = new Modelocomun();
    $modelo_comun1->consultar();
 }


 public function actualizar()
    { 
       require_once("modelos/Modelocomun.php");
       $modelo_comun2 = new Modelocomun();
       $modelo_comun2->actualizar();
    }

    public function eliminar()
    { 
       require_once("modelos/Modelocomun.php");
       $modelo_comun3 = new Modelocomun();
       $modelo_comun3->eliminar();
    }


    public function insertar($id,$marca,$modelo,$color,$año)
    { 
       
       $modelo_comun4 = new Modelocomun();
       $modelo_comun4->insertar($id,$marca,$modelo,$color,$año);
       
       require_once("modelos/Modelocomun.php");
       
       
    

    }

}

?>