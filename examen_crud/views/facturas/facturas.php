<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
</head>

<body>
  <div class="container">

    <a href="index.php?c=facturas&a=nuevo" class="btn btn-primary">INSERTAR</a>

    <br />
    <br />
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr class="table-primary">
            <th>Nombre</th>
            <th>Direccion</th>
            <th>NIF</th>
            <th>Número de Albarán</th>
            <th>Servicio</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Precio sin Impuestos</th>
            <th>Precio IVA</th>
            <th>Precio IRPF</th>
            <th>Precio Total</th>

  

            
          </tr>
        </thead>

        <tbody>
           <?php foreach($data["facturas"] as $dato) { // lo guardo en la variable $data
							
              echo "<tr>";
							
              echo "<td>".$dato["nombre"]."</td>";
						 	echo "<td>".$dato["direccion"]."</td>";
						 	echo "<td>".$dato["NIF"]."</td>";
						 	echo "<td>".$dato["numero"]."</td>";
							echo "<td>".$dato["servicio"]."</td>";
              echo "<td>".$dato["descripcion"]."</td>";
              echo "<td>".$dato["fecha"]."</td>";
              echo "<td>".$dato["precio_sin_impuestos"]."</td>";
              echo "<td>".$dato["precio_IVA"]."</td>";
              echo "<td>".$dato["precio_IRPF"]."</td>";
              echo "<td>".$dato["precio_Total"]."</td>";


							echo "<td><a href='index.php?c=facturas&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>EDITAR</a></td>";
							
              echo "<td><a href='index.php?c=facturas&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>ELIMINAR</a></td>";
							
              echo "</tr>";
						} 
						?>
        </tbody>

      </table>
    </div>
  </div>
</body>

</html>