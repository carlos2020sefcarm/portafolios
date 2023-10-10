<?php

class Productos{

    private $nombre;
    private $precio;
    private $stock;


    function no_queda(){
        echo $this->nombre . " no esta en stock ";
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

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock): self
    {
        $this->stock = $stock;

        return $this;
    }
}

?>