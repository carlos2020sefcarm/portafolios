<?php

function esprimo($n){

    if($n<=1){
        return false; //no es primo
             }
    else {
        
        $i=2;
         while($i<=sqrt($n)) // i<= raiz de n
           {
             if($n%$i==0) // si el resto no haencontrado un divisor
                    {return false; //no es primo
                    }    
             else {
                    $i++;      
                  }      
           }
        
        return true;
        
        
         }         
                  }

        $numero = 11;
        esprimo($numero);
        if (esprimo($numero))
         {
          echo "el numero " . $numero . " es primo" ;
          echo "<br>";
         }
        else{
            echo "el numero ". $numero . " no es primo";
            }
           
        // 100 prmeros primos

        for($contador=1;$contador<=100;$contador++)
        {
           if (esprimo($contador)) // si es primo lo escribimos
                                  {
                         echo $contador . " ";
                                  } 
        }

     
?>