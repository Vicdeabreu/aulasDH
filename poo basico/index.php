<?php 

  include "Pessoas.php";
  include "Funcionarios.php";

  $pessoaUm = new Pessoas();
  $pessoaUm->nome = "Vitor";
  $pessoaUm->setIdade(23);
  var_dump($pessoaUm);

  echo "<h1>".$pessoaUm->nome."</h1>";
  echo "<h1>".$pessoaUm->getIdade()."</h1>";

  $pessoaDois = new Pessoas();

  $pessoaDois->nome = "Vinicius";
  var_dump($pessoaDois);

  $funcionarioUm = new Funcionarios();
  $funcionarioUm->nome = "Ligia";
  $funcionarioUm->setIdade(18);

  var_dump($funcionarioUm);
?>