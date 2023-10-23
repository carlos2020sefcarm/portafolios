<?php

Class Factura {

    private $numero_factura;
    private $fecha;
    private $importe_sin_impuestos;
    private $importe_con_impuestos;
    
    

    public function importe_de_factura($importe_con)
    {
       return $importe_con = $this->importe_sin_impuestos + ($this->importe_sin_impuestos * 0.21)-($this->importe_sin_impuestos *0.15);

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

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getImporteSinImpuestos()
    {
        return $this->importe_sin_impuestos;
    }

    public function setImporteSinImpuestos($importe_sin_impuestos): self
    {
        $this->importe_sin_impuestos = $importe_sin_impuestos;

        return $this;
    }

    public function getImporteConImpuestos()
    {
        return $this->importe_con_impuestos;
    }

    public function setImporteConImpuestos($importe_con_impuestos): self
    {
        $this->importe_con_impuestos = $importe_con_impuestos;

        return $this;
    }
}



?>