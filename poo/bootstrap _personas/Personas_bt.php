<?php

class Personas{

    private $nombre;
    private $primer_apellido;
    private $segundo_apellido;
    private $edad;
    



    
    function haz_echo(){

        echo $this->nombre . "es de mayor edad ";

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

    public function getPrimerApellido()
    {
        return $this->primer_apellido;
    }

    public function setPrimerApellido($primer_apellido): self
    {
        $this->primer_apellido = $primer_apellido;

        return $this;
    }

    public function getSegundoApellido()
    {
        return $this->segundo_apellido;
    }

    public function setSegundoApellido($segundo_apellido): self
    {
        $this->segundo_apellido = $segundo_apellido;

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
}

?>