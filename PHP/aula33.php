<?php
// Método CONSTRUCT

class Humano
{

     private $nome;
     private $sobrenome;

  function __construct($n,$s){

      $this->$nome = $n;
      $this->$sobrenome = $s;
  }

  public function nomeCompleto()

  {
    return $this->nome . ' ' . $this->sobrenome;
  }
}

$homem = new Humano('Ricardo','Cunha');
$mulher = new Humano('Fabiola','Barbosa');

echo $homem->nomeCompleto();
echo '<br>';
echo $mulher->nomeCompleto();

?>
