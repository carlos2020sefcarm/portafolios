<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>CRUD de Facturas</title>
</head>
<body>

    <?php

    require_once "config/config.php";
    require_once "config/database.php";
    require_once "controllers/FacturasController.php";

    if(isset($_GET['c']))
    {
        $controlador = cargarControlador($_GET['c']);

        if(isset($_GET['a']))
        {
            if(isset($_GET['id']))
            {
                cargarAccion($controlador,$_GET['a'],$_GET['id']);
            }
            else
            {
                cargarAccion($controlador,$_GET['a']);
            }
        }
        else
        {
            cargarAccion($controlador, ACCION_PRINCIPAL);
        }
    }
    else
    {
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        $accionTmp = ACCION_PRINCIPAL;
        $controlador->$accionTmp();
    }
    ?>
    
</body>
</html>