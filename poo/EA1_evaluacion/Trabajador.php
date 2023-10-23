<?php

abstract Class Trabajador{

    private $nombre;
    private $direccion;
    private $email;
    private $NIF;
    private $numero_de_horas;
    private $sueldo;
    private $telefono;
    

    abstract public function sueldo();
 


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;

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

    public function getNumeroDeHoras()
    {
        return $this->numero_de_horas;
    }

    public function setNumeroDeHoras($numero_de_horas): self
    {
        $this->numero_de_horas = $numero_de_horas;

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

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }
}

?>