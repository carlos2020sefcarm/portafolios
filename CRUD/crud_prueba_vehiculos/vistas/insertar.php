
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud productos</title>
</head>
<body>
    
    <form action="" method="post">
    
    
        <label>id</label>
        <input type="number" step="1" name="id"required>
        <label>marca</label>
        <input type="text" required name="marca">
        <label>modelo</label>
        <input type="text" required name="modelo">
        <label>color</label>
        <input type="text" required name="color">
        <label>año</label>
        <input type="number" step="1" min="1900" name="año" required><br><br>
        <input type ="submit" value ="insertar"><br><br>
    </form>

</body>
</html>


<?php
if (isset($_post["insertar"]))
{
$id = $_POST["id"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$color = $_POST["color"];
$año = $_POST["año"];

require_once "controladores/Controladorcomun.php";
     $con_controladorcomun2 = new Controladorcomun();
     $con_controladorcomun2->insertar($id,$marca,$modelo,$color,$año);
    }
?>