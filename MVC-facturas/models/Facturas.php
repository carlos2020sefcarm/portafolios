<?php

class Facturas
{
    private $db;
    private $facturas;

    public function __construct()
    {
        $this->db = conectar::conexion();
        $this->facturas = array();
    }

    public function getFacturas()
    {
        $sql = "SELECT * FROM factura";

        if($resultado = $this->db->query($sql))
        {
            while($row = $resultado->fetch_assoc())
            {
                $this->facturas[] = $row;
            }
        }
        return $this->facturas;
    }

    public function insertar($nombre,$direccion,$nif,$albaran,$servicio,$descripcion,$fecha,$precio_sin_impuestos,$iva,$irpf,$precio_total)
    {
        $resultado = $this->db->query("INSERT INTO factura(nombre, direccion, nif, albaran, servicio, descripcion, fecha, precio_sin_impuestos, iva, irpf, precio_total) VALUE ('$nombre','$direccion','$nif','$albaran','$servicio','$descripcion','$fecha','$precio_sin_impuestos','$iva','$irpf','$precio_total');");
    }

    public function modificar($id, $nombre, $direccion, $nif, $albaran, $servicio, $descripcion, $fecha, $precio_sin_impuestos, $iva, $irpf, $precio_total)
    {
        $resultado = $this->db->query("UPDATE factura SET nombre='$nombre', direccion='$direccion', nif='$nif', albaran='$albaran', servicio='$servicio', descripcion='$descripcion', fecha='$fecha', precio_sin_impuestos='$precio_sin_impuestos', iva='$iva', irpf='$irpf', precio_total='$precio_total',  WHERE id = '$id'");
    }

    public function eliminar($id)
    {
        $resultado = $this->db->query("DELETE FROM factura WHERE id = '$id'");
    }

    public function getFactura($id)
    {
        $sql = "SELECT * FROM factura WHERE id='$id'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();

        return $row;
    }
}

?>