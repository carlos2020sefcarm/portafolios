<?php

class FacturasController
{
    public function __construct()
    {
        require_once "models/Facturas.php";
    }

    public function index()
    {
        $facturas = new Facturas();
        $data["facturas"] = $facturas->getFacturas();

        require_once "views/facturas/facturas.php";
    }

    public function nuevo()
    {
        require_once "views/facturas/facturas_nuevo.php";
    }

    public function guarda()
    {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $nif = $_POST['nif'];
        $albaran = $_POST['albaran'];
        $servicio = $_POST['servicio'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $precio_sin_impuestos = $_POST['precio_sin_impuestos'];
        $iva = $_POST['iva'];
        $irpf = $_POST['irpf'];
        $precio_total = $_POST['precio_total'];

        $facturas = new Facturas();
        $facturas->insertar($nombre,$direccion,$nif,$albaran,$servicio,$descripcion,$fecha,$precio_sin_impuestos,$iva,$irpf,$precio_total);

        $this->index();
    }

    public function modificar($id)
    {
        $facturas = new Facturas();

        $data["id"] = $id;
        $data["facturas"] = $facturas->getFactura($id);
        

        require_once "views/facturas/facturas_modificar.php";

    }

    public function actualizar()
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $nif = $_POST['nif'];
        $albaran = $_POST['albaran'];
        $servicio = $_POST['servicio'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $precio_sin_impuestos = $_POST['precio_sin_impuestos'];
        $iva = $_POST['iva'];
        $irpf = $_POST['irpf'];
        $precio_total = $_POST['precio_total'];
        

        $facturas = new Facturas();
        $facturas->modificar($id,$nombre,$direccion,$nif,$albaran,$servicio,$descripcion,$fecha,$precio_sin_impuestos,$iva,$irpf,$precio_total);

        $this->index();
    }

    public function eliminar($id)
    {
        $facturas = new Facturas();
        $facturas->eliminar($id);

        $this->index();
    }
}

?>