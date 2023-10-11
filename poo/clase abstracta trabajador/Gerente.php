<?php
 
 class Gerente extends Trabajador{
    
    
    
    private $utilidades;
    private $porcentaje; 



        public function calcular_sueldo(){
           
           
            return $this->utilidades * 1.10 ;
        }


    public function getUtilidades()
    {
        return $this->utilidades;
    }

    public function setUtilidades($utilidades)
    {
        $this->utilidades = $utilidades;

        return $this;
    }

    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }
    }


?>