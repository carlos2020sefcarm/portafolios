<?php

class Factura{


    private $numero_factura;
    private $fecha_emision;
    private $importe;
    
    
    function calcular($valor)
    
    {
        $resultado = $valor + ($valor * 0.21) - ($valor * 0.15);
        
        return $resultado;


    }
    


    public function getNumeroFactura()
    {
        return $this->numero_factura;
    }

    public function setNumeroFactura($numero_factura): self
    {
        $this->numero_factura = $numero_factura;

        return $this;
    }

    public function getFechaEmision()
    {
        return $this->fecha_emision;
    }

    public function setFechaEmision($fecha_emision): self
    {
        $this->fecha_emision = $fecha_emision;

        return $this;
    }

    public function getImporte()
    {
        return $this->importe;
    }

    public function setImporte($importe): self
    {
        $this->importe = $importe;

        return $this;
    }
}


?>