<?php
function listar()
{
    //Incluye el modelo que corresponde
    require 'models/libros_model.php';
    //Le pide al modelo todos los libros
    $libros = getLibros();
    //Pasa a la vista toda la información que se desea representar
    include 'views/libros_listar.php';
}


function getLibro($id)
{
    $db = getConnection();
    $query = 'SELECT * FROM libros WHERE id = ?';
    $stmt = $db->prepare($query);
    $stmt->execute(array($id));
    $libro = $stmt->fetch();
    return $libro;
}

function ver()
{
    if (!isset($_GET['id']))
        die("No has especificado un identificador de libro.");
    $id = $_GET['id'];
    //Incluimos el modelo correspondiente
    require 'models/libros_model.php';
    //Le pide al modelo el libro con id = $id
    $libro = getLibro($id);
    if ($libro === null)
        die("Identificador de libro incorrecto");
    //Pasamos a la vista toda la información que se desea representar
    include('views/libros_listar.php');
}
?>