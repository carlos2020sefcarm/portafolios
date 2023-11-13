<?php
	
	class Vehiculos {
		
		private $db;
		private $vehiculos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->vehiculos = array();
		}
		
		public function getVehiculos()
		{
			$sql = "SELECT * FROM vehiculo;";
      
      if($resultado = $this->db->query($sql)){
        while($row = $resultado->fetch_assoc())
        {
          $this->vehiculos[] = $row;
        }
      }			
			return $this->vehiculos;
		}
		
		public function insertar($matricula, $marca, $modelo, $anio, $color, $bastidor){
			
			$resultado = $this->db->query("INSERT INTO vehiculo (matricula, marca, modelo, anio, color, bastidor) VALUES ('$matricula', '$marca', '$modelo', '$anio', '$color', '$bastidor')");		
		}
		
		public function modificar($id, $matricula, $marca, $modelo, $anio, $color, $bastidor){
			
			$resultado = $this->db->query("UPDATE vehiculo SET matricula='$matricula', marca='$marca', modelo='$modelo', anio='$anio', color='$color', bastidor='$bastidor' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM vehiculo WHERE id = '$id'");
			
		}
		
		public function getVehiculo($id){
      
			$sql = "SELECT * FROM vehiculo WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
    }
	
	} 
?>