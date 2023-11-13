<?php
	
	class VehiculosController {
		
		public function __construct(){
			require_once "models/Vehiculos.php";
		}
		
		public function index(){
			
			$vehiculos = new Vehiculos();
			$data["vehiculos"] = $vehiculos->getVehiculos();
			
			require_once "views/vehiculos/vehiculos.php";	
		}
		
		public function nuevo(){
			
			require_once "views/vehiculos/vehiculos_nuevo.php";
		}
		
		public function guarda(){
			
			$matricula = $_POST['matricula'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];
      $bastidor = $_POST['bastidor'];

      var_dump($modelo);

			$vehiculos = new Vehiculos();
			$vehiculos->insertar($matricula, $marca, $modelo, $anio, $color, $bastidor);

			$this->index();
		}
		
		public function modificar($id){
			
			$vehiculos = new Vehiculos();
			
			$data["id"] = $id;
			$data["vehiculos"] = $vehiculos->getVehiculo($id);
	
			require_once "views/vehiculos/vehiculos_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$matricula = $_POST['matricula'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$anio = $_POST['anio'];
			$color = $_POST['color'];
      $bastidor = $_POST['bastidor'];

			$vehiculos = new Vehiculos();
			$vehiculos->modificar($id, $matricula, $marca, $modelo, $anio, $color, $bastidor);

			$this->index();
		}
		
		public function eliminar($id){
			
			$vehiculos = new Vehiculos();
			$vehiculos->eliminar($id);

			$this->index();
		}	
	}
?>