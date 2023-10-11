<?php

class Articulos {
    private $nombre;
    private $precio;

    public function poner_precio_sin_descuento() {

        return $this->precio ; 

    }



    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}

?>