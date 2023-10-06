<?php
class Calcular{

    private $valor1;
    private $valor2;

    
    
    
    
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }


    public function getValor1()
    {
        return $this->valor1;
    }


    
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    public function getValor2()
    {
        return $this->valor2;
    }

   
}

?>