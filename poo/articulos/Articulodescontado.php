<?php

class Articulodescontado extends Articulos {

        private $descuento;
        

        public function poner_precio_descuento($descuento,$precio){

            return $precio - ($this->descuento * $precio / 100);

        }


        public function getDescuento()
        {
                return $this->descuento;
        }

        public function setDescuento($descuento): self
        {
                $this->descuento = $descuento;

                return $this;
        }
}

?>