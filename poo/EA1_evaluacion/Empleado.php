<?php

Class Empleado extends Trabajador{

public function sueldo()

{
    $this->numero_de_horas = 40;
    
   return $salario_empleado = ($this->numero_de_horas * 20);
}
    
}



?>