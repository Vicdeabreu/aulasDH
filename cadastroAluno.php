<?php 
  $nomeAluno = $_POST['nomeAluno'];
  $raAluno = $_POST['raAluno'];
  $cursoID = $_POST['curso'];

  $db = conectarBanco(); 

  $query = $db->prepare('INSERT INTO alunos (nome, ra, curso_id)
  values (:nome,:ra,:curso_id)');

  $resultado = $query ->execute([
        "nome" => $nomeAluno, 
        "ra" => $raAluno, 
        "curso_id" => $cursoID]);

  var_dump($resultado);
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>