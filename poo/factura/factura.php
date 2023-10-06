<?php
class Factura{
    private $fecha;
    private $numero_factura;
    private $precio_sin_impuestos;
    private $precio_con_impuestos;



    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }




    public function getFecha()
    {
        return $this->fecha;
    }

    
    public function setNumeroFactura($numero_factura)
    {
        $this->numero_factura = $numero_factura;

        return $this;
    }
    

    public function getNumeroFactura()
    {
        return $this->numero_factura;
    }

    
    public function setPrecioSinImpuestos($precio_sin_impuestos)
    {
        $this->precio_sin_impuestos = $precio_sin_impuestos;

        return $this;
    }


    public function getPrecioSinImpuestos()
    {
        return $this->precio_sin_impuestos;
    }

    
    public function setPrecioConImpuestos($precio_con_impuestos)
    {
        $this->precio_con_impuestos = $precio_con_impuestos;

        return $this;
    }

    public function getPrecioConImpuestos()
    {
        return $this->precio_con_impuestos;
    }


   function calcular(){
        $this->precio_con_impuestos = $this->precio_sin_impuestos + $this->precio_sin_impuestos * 0.21 - $this->precio_sin_impuestos * 0.15;

        return  "el precio de la factura es " . $this->precio_con_impuestos . " euros";

   }
 
}

?>