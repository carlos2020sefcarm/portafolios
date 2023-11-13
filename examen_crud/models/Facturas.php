<?php
	
	class Facturas { 
		
		private $db;
		private $facturas; 
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->facturas = array(); 
		}

		
		


		
		public function getFacturas()
		{
			$sql = "SELECT * FROM facturas_tabla";
      
      		if($resultado = $this->db->query($sql))
			
			{

				while($row = $resultado->fetch_assoc())
				{
					$this->facturas[] = $row; 


				}
      
		}			
			return $this->facturas;
		}
		
		public function insertar($nombre, $direccion, $NIF, $numero, $servicio, $descripcion, $fecha, $precio_sin_impuestos, $precio_IVA, $precio_IRPF, $precio_Total){ 
			
			 

			 $precio_IVA = $precio_sin_impuestos * 0.21;
			 $precio_IRPF = $precio_sin_impuestos * 0.15;
			 $precio_Total = $precio_sin_impuestos + $precio_IVA - $precio_IRPF;

			$resultado = $this->db->query("INSERT INTO facturas_tabla (nombre, direccion, NIF, numero, servicio, descripcion, fecha, precio_sin_impuestos, precio_IVA, precio_IRPF, precio_Total) VALUES ('$nombre', '$direccion', '$NIF', '$numero', '$servicio', '$descripcion', '$fecha', '$precio_sin_impuestos', '$precio_IVA', '$precio_IRPF', '$precio_Total')");		
		}
		
		public function modificar($id, $nombre, $direccion, $NIF, $numero, $servicio, $descripcion, $fecha, $precio_sin_impuestos, $precio_IVA, $precio_IRPF, $precio_Total){
			
			$precio_IVA = $precio_sin_impuestos * 0.21;
			$precio_IRPF = $precio_sin_impuestos * 0.15;
			$precio_Total = $precio_sin_impuestos + $precio_IVA - $precio_IRPF;
			
			$resultado = $this->db->query("UPDATE facturas_tabla SET nombre='$nombre', direccion='$direccion', NIF='$NIF', numero='$numero', servicio='$servicio', descripcion='$descripcion', fecha='$fecha', precio_sin_impuestos='$precio_sin_impuestos', precio_IVA='$precio_IVA', precio_IRPF='$precio_IRPF', precio_Total='$precio_Total' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM facturas_tabla WHERE id = '$id'");  
			
		}
		
		public function getFactura($id){  
      
			$sql = "SELECT * FROM facturas_tabla WHERE id='$id'";

			$resultado = $this->db->query($sql);
			
			$row = $resultado->fetch_assoc();

			return $row;
    	}
	
}

?>