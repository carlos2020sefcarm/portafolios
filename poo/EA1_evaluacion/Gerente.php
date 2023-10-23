<?php

Class Gerente extends Trabajador{

    private $cargo;


    function sueldo()
    
    {

        $this->numero_de_horas  = 30;
     return   $salario_gerente = ($this->numero_de_horas * 40);

    }
    


    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }
}


?>