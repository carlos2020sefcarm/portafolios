<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <label for="nif">NIF</label>
        <input type="text" class="form-control" id="nif" name="nif"
          value="<?php echo $data["facturas"]["nif"]?>" />
      </div>

      <div class="form-group">
        <label for="albaran">Albaran</label>
        <input type="text" class="form-control" id="albaran" name="albaran" value="<?php echo $data["facturas"]["albaran"]?>" />
      </div>

      <div class="form-group">
        <label for="servicio">Servicio</label>
        <input type="text" class="form-control" id="servicio" name="servicio"
          value="<?php echo $data["facturas"]["servicio"]?>" />
      </div>

      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion"
          value="<?php echo $data["facturas"]["descripcion"]?>" />
      </div>

      <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="text" class="form-control" id="fecha" name="fecha"
          value="<?php echo $data["facturas"]["fecha"]?>" />
      </div>

      <div class="form-group">
        <label for="precio_sin_impuestos">Precio sin impuestos</label>
        <input type="text" class="form-control" id="precio_sin_impuestos" name="precio_sin_impuestos"
          value="<?php echo $data["facturas"]["precio_sin_impuestos"]?>" />
      </div>

      <div class="form-group">
        <label for="iva">IVA</label>
        <input type="text" class="form-control" id="iva" name="iva"
          value="<?php echo $data["facturas"]["iva"]?>" />
      </div>

      <div class="form-group">
        <label for="irpf">IRPF</label>
        <input type="text" class="form-control" id="irpf" name="irpf"
          value="<?php echo $data["facturas"]["irpf"]?>" />
      </div>

      <div class="form-group">
        <label for="precio_total">Precio total</label>
        <input type="text" class="form-control" id="precio_total" name="precio_total"
          value="<?php echo $data["facturas"]["precio_total"]?>" />
      </div>
      

      <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>

    </form>
</body>

</html>