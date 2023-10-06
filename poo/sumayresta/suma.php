<?php
    class Sumar {
        private $valor1;
        private $valor2;
        private $resultado;


        
        public function setValor1($valor1): self
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

        public function setResultado($resultado)
        {
                $this->resultado = $resultado;
                return $this;
        }

        public function getResultado()
        {
                return $this->resultado;
        }

       
        public function operar()
        {
           echo   $this->resultado = $this->valor1 + $this->valor2;
        }
        


}





?>