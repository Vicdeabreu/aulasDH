<?php 

  include_once('config/conexao.php');

  $db = conectarBanco();
  $query = $db->query('SELECT * FROM cursos'); // query fixa nao depende de nenhuma info do usuario
  $cursos = $query->fetchAll(PDO::FETCH_ASSOC);
  // recuperando o id do aluno na url


  if(isset($_GET['id'])){
    $id = $_GET['id'];
  } elseif (isset($_POST['id'])) {
    $id = $_POST['id'];
  }else {
    echo "Voce deve passar um id!";
    exit;
  }
  
  $query = $db->prepare('SELECT * FROM alunos WHERE id=?');
  $query->execute([$id]);
  $aluno = $query->fetch(PDO::FETCH_ASSOC);

  if($_POST != []) {
    $nomeAluno = $_POST['nomeAluno'];
    $raAluno = $_POST['raAluno'];
    $cursoID = $_POST['curso'];
    $id = $_POST['id'];

    $query = $db->prepare('UPDATE alunos SET nome = :nome , ra = :ra, curso_id = :curso_id
    WHERE id = :id');
    $query-> execute([
      "id" => $id,
      "curso_id" => $cursoID,
      "ra" => $raAluno,
      "nome" => $nomeAluno
    ]
    );
  }
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
  <form action="updateAluno.php" method='post'>
    <input type="text" name= "id" readonly hidden value="<?php echo $id; ?>">
    <h2>Nome aluno</h2>
    <input type="text" name="nomeAluno" value="<?php echo $aluno['nome'] ?>">
    <h2>RA do Aluno</h2>
    <input type="text" name="raAluno" value="<?php echo $aluno['ra'] ?>" readonly>
    <h2>Cursos disponibles</h2>
    <select name="curso">
      <?php foreach($cursos as $curso): ?>
        <?php if($curso['id'] == $aluno['curso_id']): ?>
      <option selected value="<?= $curso['id'] ?>"><?= $curso['nome'] ?></option>
      <?php else: ?>

     <option value="<?= $curso['id'] ?>"><?= $curso['nome'] ?></option>
       <?php endif; ?>
     <?php endforeach; ?>
    </select>
    
    <button type="submit">Salvar alteracoes</button>
  </form>

</html>