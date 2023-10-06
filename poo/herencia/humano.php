<?php
class Humano{

    private $nombre;
    private $apellido;
    private $edad;
    private $genero;


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
    

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
   

    public function getEdad()
    {
        return $this->edad;
    }

  
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

   function sexo(){

    echo "mi genero es " . $this->genero;

   }
   
}

?>