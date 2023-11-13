<?php
	
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</head>

<body>   
  <div class="container">

    <form id="nuevo" name="nuevo" method="POST" action="index.php?c=facturas&a=actualizar" autocomplete="off">

      <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" /> 
      
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre"
          value="<?php echo $data["facturas"]["nombre"]?>" />
      </div>

     

      <div class="form-group">
        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion"
          value="<?php echo $data["facturas"]["direccion"]?>" />
      </div>

      <div class="form-group">
        <label for="NIF">NIF</label>
        <input type="text" class="form-control" id="NIF" name="NIF"
          value="<?php echo $data["facturas"]["NIF"]?>" />
      </div>

      <div class="form-group">
        <label for="numero">Número de Albarán</label>
        <input type="number" class="form-control" id="numero" name="numero" value="<?php echo $data["facturas"]["numero"]?>" />
      </div>

      <div class="form-group">
        <label for="servicio">Servicio</label>
        <input type="text" class="form-control" id="servicio" name="servicio"
          value="<?php echo $data["facturas"]["servicio"]?>" />
      </div>

      <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion"
          value="<?php echo $data["facturas"]["descripcion"]?>" />
      </div> 

      <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="date" class="form-control" id="fecha" name="fecha"
          value="<?php echo $data["facturas"]["fecha"]?>" />
      </div> 

      <div class="form-group">
        <label for="precio_sin_impuestos">Precio sin Impuestos</label>
        <input type="text" class="form-control" id="precio_sin_impuestos" name="precio_sin_impuestos"
          value="<?php echo $data["facturas"]["precio_sin_impuestos"]?>" />
      </div>

           
      <button type="guardar" name = "guardar" type = "submit" class = "btn-btn-primary">Guardar</button>
    </form>
</body>

</html>