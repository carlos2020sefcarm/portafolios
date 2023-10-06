<?php

$cantidad_euros = $_GET["cantidad_euros"];
$cambio_a_pesetas=166.386;

echo round($cantidad_euros * $cambio_a_pesetas) . " pesetas.";





?>