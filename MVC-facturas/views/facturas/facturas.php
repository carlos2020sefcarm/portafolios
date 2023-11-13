<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <a href="index.php?c=Facturas&a=nuevo" class="btn btn-primary">INSERTAR</a>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>NIF</th>
                    <th>Albaran</th>
                    <th>Servicio</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Precio sin impuestos</th>
                    <th>IVA</th>
                    <th>IRPF</th>
                    <th>Precio total</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($data["facturas"] as $dato)
                {
                    echo "<tr>";

                    echo "<td>".$dato["nombre"]."</td>";
                    echo "<td>".$dato["direccion"]."</td>";
                    echo "<td>".$dato["nif"]."</td>";
                    echo "<td>".$dato["albaran"]."</td>";
                    echo "<td>".$dato["servicio"]."</td>";
                    echo "<td>".$dato["descripcion"]."</td>";
                    echo "<td>".$dato["fecha"]."</td>";
                    echo "<td>".$dato["precio_sin_impuestos"]."</td>";
                    echo "<td>".$dato["iva"]."</td>";
                    echo "<td>".$dato["irpf"]."</td>";
                    echo "<td>".$dato["precio_total"]."</td>";
                    
                    echo "<td><a href='index.php?c=Facturas&a=modificar&id=".$dato["id"]." ' class='btn btn-warning'>EDITAR</a></td>";

                    echo "<td><a href='index.php?c=Facturas&a=eliminar&id=".$dato["id"]." ' class='btn btn-danger'>ELIMINAR</a></td>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>