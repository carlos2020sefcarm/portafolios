<?php
function getConnection()
{
   $user = 'alejandro';
   $pwd = 'Mf4XqMI_oJ6ZA3Fv';
   return new PDO('mysql:host=localhost;dbname=libros1', $user, $pwd);
}
function getLibros()
{
   $db = getConnection();
   $result = $db->query('SELECT titulo, precio FROM libros');
   $libros = array();
   while ($libro = $result->fetch())
      $libros[] = $libro;

   return $libros;
}
?>