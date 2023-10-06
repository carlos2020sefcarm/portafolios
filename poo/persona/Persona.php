<?php

class Persona {

    private $nombre;

    public function recogerNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function obtenerNombre()
    {
        return $this->nombre;
    }

}


?>