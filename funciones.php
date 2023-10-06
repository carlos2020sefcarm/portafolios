<?php


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



?>