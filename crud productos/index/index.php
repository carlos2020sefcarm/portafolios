
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud productos</title>
</head>
<body>
    
    <form action="<?php $_SERVER["php._self"] ?>" methos="post">
    <label>id</label><br><br>
    <input type="number" step="1" required><br><br>
    <label>producto</label><br><br>
    <input type="text" required><br><br>
    <label>codigo</label><br><br>
    <input type="text" required><br><br>
    <label>descripcion</label><br><br>
    <input type="text" required><br><br>
    <label>precio</label><br><br>
    <input type="number" step="0.01" required><br><br>
    <input type ="submit" value ="insertar"><br><br>
    <input type ="submit" value ="consultar"><br><br>
    <input type ="submit" value ="actualizar"><br><br>
    <input type ="submit" value ="eliminar"><br><br>
    


    </form>

</body>
</html>


<?php



?>