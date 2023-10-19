<?php

class Animal {

    private $especie;
    private $edad;
    private $nombre;
    private $continente;

    

    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($especie): self
    {
        $this->especie = $especie;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad): self
    {
        $this->edad = $edad;

        return $this;
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

    public function getContinente()
    {
        return $this->continente;
    }

    public function setContinente($continente): self
    {
        $this->continente = $continente;

        return $this;
    }
}

?>