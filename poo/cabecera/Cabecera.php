<?php
class cabecera{

    private $titulo;
    private $posicion;


    public function set_titulo($titulo){
        $this->titulo=$titulo;
        
    }

    public function get_titulo(){
    return $this->titulo;

    }

    public function set_posicion($posicion){
        $this->posicion=$posicion;
    }  

    public function get_posicion(){
    return $this->posicion;

    }

    public function asignar(){

        echo "<p style='text-align:$this->posicion'>$this->titulo</p>";
    }

    
}
?>