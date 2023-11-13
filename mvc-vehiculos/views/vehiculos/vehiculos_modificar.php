<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
<div class="container">
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">

        <input type="hidden" id="id" name="id" value="<?php echo $data["id"];?>"/>

            <div class="form-group">
                <label for="matrcula">Matricula</label>
                <input type="text" class="form-control" id="matrcula" name="matrcula"
                value="<?php echo $data["vehiculos"]["matricula"]?>"/>
            </div>

            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca"
                value="<?php echo $data["vehiculos"]["marca"]?>"/>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo"
                value="<?php echo $data["vehiculos"]["modelo"]?>"/>
            </div>

            <div class="form-group">
                <label for="anio">Año</label>
                <input type="text" class="form-control" id="anio" name="anio"
                value="<?php echo $data["vehiculos"]["anio"]?>"/>
            </div>

            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color"
                value="<?php echo $data["vehiculos"]["color"]?>"/>
            </div>

            <div class="form-group">
                <label for="bastidor">Bastidor</label>
                <input type="text" class="form-control" id="bastidor" name="bastidor"
                value="<?php echo $data["vehiculos"]["bastidor"]?>"/>
            </div>

            <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Actualizar</button>
        
        </form>
    </div>
</body>
</html>