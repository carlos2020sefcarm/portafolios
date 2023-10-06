<?php

include("trabajador.php");

$empleado_1 = new Trabajador();
$empleado_1 ->setNombre("luis");
$empleado_1 ->setSueldo(2500);

$empleado_2= new Trabajador();
$empleado_2 ->setNombre("samuel");
$empleado_2 -> setSueldo(1800);





    if($empleado_1->getSueldo() > $empleado_2->getSueldo())
     {
         echo $empleado_1->getNombre()." gana más dinero";
     }
     else if ( $empleado_1->getSueldo() < $empleado_2->getSueldo())
     {
         echo $empleado_2->getNombre()." gana más dinero";;
     }
     else { "ambos ganan lo mismo";}



?>