<?php
class Empleado extends Trabajador {

    private $horas_trabajadas;
    private $valor_hora;
   

    

    public function calcular_sueldo(){

         return $this->horas_trabajadas * 3.5;

    }


    public function getHorasTrabajadas()
    {
        return $this->horas_trabajadas;
    }

    public function setHorasTrabajadas($horas_trabajadas): self
    {
        $this->horas_trabajadas = $horas_trabajadas;

        return $this;
    }

    public function getValorHora()
    {
        return $this->valor_hora;
    }

    public function setValorHora($valor_hora): self
    {
        $this->valor_hora = $valor_hora;

        return $this;
    }
}

?>