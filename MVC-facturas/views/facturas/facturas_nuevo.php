<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <div class="container">
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=Factura&a=guarda" autocomplete="off">
            <div class="form-group">
                <label for="matrcula">Especie</label>
                <input type="text" class="form-control" id="especie" name="especie"/>
            </div>

            <div class="form-group">
                <label for="marca">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"/>
            </div>

            <div class="form-group">
                <label for="modelo">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad"/>
            </div>

            <div class="form-group">
                <label for="anio">Lugar de origen</label>
                <input type="text" class="form-control" id="lugar_origen" name="lugar_origen"/>
            </div>


            <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
        
        </form>
    </div>

</body>
</html>