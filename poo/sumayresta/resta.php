<?php


class resta {
    private $valor1;
    private $valor2;
    private $resultado;

    
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

    }


    
    public function getValor1()
    {
        return $this->valor1;
    }

    
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

    }

 
    public function getValor2()
    {
        return $this->valor2;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

      
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    function operar(){

       echo  $this->resultado= $this->valor1 + $this->valor2;
    }
  
}

?>