<?php

define("CONTROLADOR_PRINCIPAL","Facturas");//nombre archivo del controlador
define("ACCION_PRINCIPAL","index");

function cargarControlador($controlador)
{
    $nombreControlador = ucwords($controlador)."controller";
    $archvivoControlador = 'controller/'.ucwords($controlador).'php';

    if(!is_file($archvivoControlador))
    {
        $archvivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'Controller'.'.php';
    }
    require_once $archvivoControlador;
    $control = new $nombreControlador();
    return $control;
}

function cargarAccion($controller,$accion,$id = null)
{
    if(isset($accion) && method_exists($controller,$accion))
    {
        if($id == null)
        {
            $controller->$accion();
        }
        else
        {
            $controller->$accion($id);
        }
        }
        else
        {
        $controller->ACCION_PRINCIPAL();
    }
}

?>