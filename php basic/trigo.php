<?php

$numerogranos=0;
$casillas;
for($casillas=1;$casillas<=63;$casillas++)
 { $numerogranos=$numerogranos+2**$casillas;
 echo "casilla " . $casillas . " = " . (2**$casillas) ."<br>" ;
}
 echo "numero total de granos es " . $numerogranos;



 

function trigo2($casillas)
{$casillaAnterior=1;
 $trigototal=$casillaAnterior;
 for($c=1;$c<$casillas;$c++)
    	{
            $trigototal=$trigototal+$casillaAnterior*2;
            $casillaAnterior = $casillaAnterior*2;
        }      
        return $trigototal;
}
echo "<br>trigo2: ". trigo2(64);

?>

