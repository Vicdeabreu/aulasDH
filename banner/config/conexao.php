<?php 

  function conectarBanco(){
    $host = 'mysql:host=localhost;dbname=escola;port=3306';
    $user = 'root';
    $pass = '';

    return $db = new PDO($host, $user, $pass);
  }

  ?>