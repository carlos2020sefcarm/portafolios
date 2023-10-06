<?php
class Trabajador{

    private $nombre;
    private $sueldo;


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    
   public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }


    public function getSueldo()
    {
        return $this->sueldo;
    }


   
}



?>