<?php 


class Pessoas {

  public $nome;
  private $idade;
  protected $cpf;
  public $email;

  public function setIdade($idade){
    
    $this->idade = $idade;
  }

  public function getIdade(){
    return $this->idade;
  }

  /* -- Los métodos accesores siempre van a ir en público (para alterar una característica privada) ---- */

  public function falar() {
    echo "Eai";
  }
}
/* -- Las características van antes de las variables del Objeto --- */ 

/* ---- Los métodos son funciones --- */ 




?>