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
          <th>marca</th>
          <th>modelo</th>
          <th>color</th>
          <th>año</th>
      </tr>
  </theader>
  <tbody>
  <?php 
    require_once "controladores/Con_consulta.php";
     $con_consulta1 = new Con_consulta();
     $con_consulta1->seleccionar();
     
?>
  </tbody>    
</table>


</body>
</html>



