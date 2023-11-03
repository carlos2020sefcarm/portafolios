<?php

class Con_consulta{


 public function seleccionar()
 { 
    require_once("modelos/Modelocomun.php");
    $modelo_comun1 = new Modelocomun();
    $modelo_comun1->consultar();
 }

}

?>