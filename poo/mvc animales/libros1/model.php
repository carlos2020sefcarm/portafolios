<?php
   $user = 'alejandro';
   $pwd = 'Mf4XqMI_oJ6ZA3Fv';
   $db = new PDO('mysql:host=localhost;dbname=libros1', $user, $pwd);
   $result = $db->query('SELECT titulo, precio FROM libros');
   $libros = array();
   while ($libro = $result->fetch())
      $libros[] = $libro;
?>