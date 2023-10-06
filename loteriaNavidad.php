<?php

$cantPremios=1807;
$premios=[];
$listaNum=[];

$i=0;
while($i<$cantPremios){
    $num=rand(0,99999);
    if(!in_array($num,$listaNum)){
        $listaNum[$i]=$num;
        $i++;
    }
    //echo $num."    ";
}


    for($k=0;$k<1794;$k++){
        $premios[$k]=1000; //hasta [1793]
    
    }
    for($j=1794;$j<1802;$j++){
        $premios[$j]=60000;
    }
    for($l=1802;$l<1804;$l++){
        $premios[$l]=200000;
    }
    $premios[1804]=500000;
    $premios[1805]=1250000;
    $premios[1806]=4000000;

    shuffle($premios);
    
for($m=0;$m<1807;$m++){
    switch($premios[$m]){
        case 4000000:
            echo "<p style=background-color:red;font-size:25px>El numero premiado es: $listaNum[$m] con $premios[$m]€</p>"."<br>";
            break;
        case 1250000:
            echo "<p style=background-color:blue;font-size:22px>El numero premiado es: $listaNum[$m] con $premios[$m]€</p>"."<br>";
            break;
        case 500000:
            echo "<p style=background-color:green;font-size:20px>El numero premiado es: $listaNum[$m] con $premios[$m]€</p>"."<br>";
            break;
        case 200000:
            echo "<p style=background-color:brown;font-size:18px>El numero premiado es: $listaNum[$m] con $premios[$m]€</p>"."<br>";
            break;
        case 60000:
            echo "<p style=background-color:orange;font-size:16px>El numero premiado es: $listaNum[$m] con $premios[$m]€</p>"."<br>";
            break;
        case 1000:
            echo "<p style='background-color:yellow;font-size:14px;border: 1px solid black'>El numero premiado es: $listaNum[$m] con $premios[$m]€</p>"."<br>";
            break;
    }
}


    
    

?>