<?php
 $numero1 = $_POST['numero1'];
 $numero2 = $_POST['numero2'];
if(isset($_POST['boton1']))
{
    funcionBoton1($numero1, $numero2);
} 
elseif(isset($_POST['boton2']))
{
    funcionBoton2($numero1, $numero2);
} 
elseif(isset($_POST['boton3']))
{
    funcionBoton3($numero1, $numero2);
} 
elseif(isset($_POST['boton4']))
{
    funcionBoton4($numero1, $numero2);
}


function funcionBoton1($numero1, $numero2){
    
    if($numero1>=$numero2){
       if($numero1%$numero2==0){
        echo $numero1 . " es multiplo de " . $numero2 ."<br>"; 
                                }
        else { echo $numero1 . "no es multiplo de ". $numero2 ."<br>";
             }
                          } 
       else if ($numero2%$numero1==0) {
            echo $numero2 . " es multiplo de ". $numero1 . "<br>";
                                      }       
       else { echo $numero2 . " no es multiplo de " . $numero1 ."<br>";}
                }
                



function funcionBoton2($numero1, $numero2){


    if($numero2>=$numero1){

       $resultadoprimero=(($numero2-$numero1+1)*($numero1+$numero2))/2;
       echo "el sumatorio entre ambos numeros es ". $resultadoprimero;
                          }
     else                 {
        $resultadosegundo = (($numero1-$numero2+1)*($numero1+$numero2))/2;
     echo "el sumatorio entre ambos numeros es ". $resultadosegundo;                    
                          } 
   
}

function funcionBoton3($numero1, $numero2){
    if($numero1==1){
        echo "elija un numero que no sea la unidad";
    }
    else { 
        $divisor=0;
        $numero1inferior=($numero1-1);

        while ($numero1inferior>0){
            if($numero1%$numero1inferior==0){
                $divisor=$divisor+1;
            }
            $numero1inferior=$numero1inferior-1;  
        }  
        
        if($divisor==1){
            echo "es primo";
        }else{
            echo "no es primo";
        }
    }
    if($numero2==1) {echo"elija en el numero 2 un numero que no sea la unidad";}
    else {
        for($numero2inferior=$numero2-1;$numero2inferior>0;$numero2inferior-1)
        {}
    }



}

  

function funcionBoton4($numero1, $numero2){


    for ($i=$numero1; $i<$numero2; $i++){
            
        for($j=$numero1;$j<=$i;$j++)
        {
            echo $j;
         
        }
          echo "<br>";
    }
  
    
}
?>