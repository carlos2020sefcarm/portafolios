<?php
 class Trabajador{

    private $nombre_completo;
    private $cif;
    private $direccion;
    private $email;
    private $telefono;

    function datos_personales($N,$C,$D,$E,$T)
    
    {
        echo " el nombre completo" . $N . " con el cif " . $C . " y la direccion " .$D. " y el email " . $E ." y el telefono " . $T ; 

    }
    

  


    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }

    public function setNombreCompleto($nombre_completo): self
    {
        $this->nombre_completo = $nombre_completo;

        return $this;
    }

    public function getCif()
    {
        return $this->cif;
    }

    public function setCif($cif): self
    {
        $this->cif = $cif;

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