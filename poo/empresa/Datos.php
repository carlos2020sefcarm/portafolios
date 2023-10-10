<?php

class Datos {

    private $nombre;
    private $apellido;
    private $edad;
    private $NIF;
    private $sueldo;
    private $antiguedad;



    function quien_ganara_mas(){
        echo "<br>". $this->nombre . " gana mas dinero";



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

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

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

    public function getNIF()
    {
        return $this->NIF;
    }

    public function setNIF($NIF): self
    {
        $this->NIF = $NIF;

        return $this;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo): self
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    public function setAntiguedad($antiguedad): self
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }
}


?>