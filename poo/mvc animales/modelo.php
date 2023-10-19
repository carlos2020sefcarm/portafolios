<?php

function listar(){

    require "conexion.php";
    include "index.php";


}

function obterner_animal(){

    $resultado_1 = $conectar->query("SELECT especie,edad,nombre,continente FROM animal");
    $listado = [];
    while ($listado = $resultado_1->fetch())
    {
            $listado [] = $listado;

            return $listado;
    }
}


?>