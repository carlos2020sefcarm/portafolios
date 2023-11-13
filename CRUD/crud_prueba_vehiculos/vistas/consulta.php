<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
  </head>
<body>

<table>
  <theader>
      <tr>
          <th>id</th>
          <th>marca</th>
          <th>modelo</th>
          <th>color</th>
          <th>año</th>
          <th>actualizar</th>
          <th>eliminar</th>
      </tr>
  </theader>
  <tbody>
  <?php 
    require_once "controladores/Controladorcomun.php";
     $con_controladorcomun1 = new Controladorcomun();
     $con_controladorcomun1->seleccionar();
     
?>
  </tbody>    
</table>


</body>
</html>



