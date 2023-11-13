<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
  <div class="container">

    <a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">INSERTAR</a>

    <br />
    <br />
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr class="table-primary">
            <th>Matrícula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color</th>
            <th>Bastidor</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($data["vehiculos"] as $dato) {
							
              echo "<tr>";
							
              echo "<td>".$dato["matricula"]."</td>";
							echo "<td>".$dato["marca"]."</td>";
							echo "<td>".$dato["modelo"]."</td>";
							echo "<td>".$dato["anio"]."</td>";
							echo "<td>".$dato["color"]."</td>";
              echo "<td>".$dato["bastidor"]."</td>";

							echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'>EDITAR</a></td>";
							
              echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'>ELIMINAR</a></td>";
							
              echo "</tr>";
						}
						?>
        </tbody>

      </table>
    </div>
  </div>
</body>

</html>