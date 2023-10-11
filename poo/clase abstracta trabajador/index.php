
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action = "" method="POST">
        <legend>datos Empleado</legend><br><br>
        <label>nombre empleado</label><br>
        <input type="text" id="nombre_empleado" name="nombre_empleado"><br>
        <label>horas_trabajadas</label><br>
        <input type="number" id="horas_trabajadas" name="horas_trabajadas" step="1"><br><br><br>
        
        <legend>datos Gerente</legend><br><br>
        <label>nombre gerente</label><br>
        <input type="text" id="nombre_gerente" name="nombre_gerente"><br>
        <label>precio_servicio</label><br>
        <input type="number" id="precio_servicio" name="precio_servicio"><br><br>
        <button type="submit">enviar</button>

    </form>


</body>
</html>
<?php
 
 include("Trabajador.php");
 include("Gerente.php");
 include("Empleado.php");

 $empleado_1 = new Empleado();
 $empleado_1->setNombre($_POST["nombre_empleado"]);
 $empleado_1->setHorasTrabajadas($_POST["horas_trabajadas"]);


 $gerente_1 = new Gerente();
 $gerente_1->setNombre($_POST["nombre_gerente"]);
 $gerente_1->setUtilidades($_POST["precio_servicio"]);


echo "<br><br><br>";

 echo " el salario del empleado " . $empleado_1->getNombre() . " tiene un salario  de " . $empleado_1->calcular_sueldo() . " euros por " . $empleado_1->getHorasTrabajadas() . " horas trabajadas";

echo "<br><br><br>";

echo " el salario del gerente " . $gerente_1->getNombre() . " tiene un beneficio de ". $gerente_1->calcular_sueldo() . " por un servicio de ". $gerente_1->getUtilidades() ;
  
 

 
 

 



?>