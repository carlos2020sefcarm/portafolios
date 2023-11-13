<?php
 $fecha1 = $_POST['fecha1'];
 echo $fecha1; //Aquí la fecha es un simple texto (string)
 $fechaNacimiento=strtotime($fecha1);
 echo "<br>".$fechaNacimiento;
 $fecha2=date("d/m/y");
 echo "<br>".$fecha2;
 $fechaActual=strtotime($fecha2); //Convierto de cadena a tiempo en segundos
 echo "<br>".$fechaActual;
 echo "<br>-----------------------------------------";
 diadelanio($fecha1);
 echo "<br>-----------------------------------------";
 echo "<br>la fecha enviada es " . date("l",$fechaNacimiento); 
 $dia_semana_ingles = date("l",$fechaNacimiento);
 
 switch($dia_semana_ingles){
  
  case "Monday":
    echo "<br>la fecha enviada es lunes";
    break; 
  case "Tuesday":
      echo "<br>la fecha enviada es martes";
      break;
  case "Wednesday":
        echo "<br>la fecha enviada es miércoles";
        break;
  case "Thursday":
         echo "<br>la fecha enviada es jueves";
         break;
  case "Friday":
          echo "<br>la fecha enviada es viernes";
          break;       
  case "Saturday":
            echo "<br>la fecha enviada es sábado";
            break;       
  case "Sunday":
              echo "<br>la fecha enviada es domingo";
              break;    


 }




 if(isset($_POST['boton']))
{
    $dias=diferenciaFechas($fechaNacimiento,$fechaActual);
    echo " La diferencia en días es $dias";
    echo " Lo que supone ".floor($dias/365.25)." años";
} 

function diferenciaFechas($f1,$f2)
{
  return abs(floor(($f2-$f1)/60/60/24));
}

function diadelanio($f1)
{
  //PREPARAMOS DATOS
  $dia=date("d",strtotime($f1)); //Extraigo día
  $mes=date("m",strtotime($f1)); //Extraigo mes
  $anio=date("y",strtotime($f1));//Extraigo año
  $ajustes=[1,-2,1,0,1,0,1,1,0,1,0,1]; //ajuestes con respecto a 30 días
  //CÁLCULOS
  $mesesCompletos=$mes-1;
  $mesesCompletosEnDias=$mesesCompletos*30;
  $diastotal=$mesesCompletosEnDias+$dia;
  echo "<br>Sin ajuste: ".$diastotal;
  for($i=0;$i<$mes-2;$i++)
  {
    $diastotal=$diastotal+$ajustes[$i];
  }
  if (esbisiesto($anio)and $mes>2)
  {
    $diastotal=$diastotal+1;
  }
  echo "<br>Con ajuste: ".$diastotal;
  echo "Y ha transcurrido un ".round($diastotal*100/365)."% del año";
}
  function esbisiesto($n)
  {
    if (($n % 4 == 0 and $n % 100 != 0) or $n % 400 == 0) 
    {
        return true;
    } 
    else 
    {
        return false;
    } 
  }



?>