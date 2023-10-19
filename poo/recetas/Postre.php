<?php

interface Ingredientes{

    function imprimir_ingredientes($requisito2);

    function obtener_ingredientes($requisito);
   
 }


//  interface Recetas{

//     function pasos_receta();
    
//     function obtener_receta();




    
// }


class Postre implements Ingredientes{
   




    function obtener_ingredientes($requisito){
            return $requisito;
    }

    function imprimir_ingredientes($requisito2)
    {
        echo $requisito2;
    }


    



    
}

?>