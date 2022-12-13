<?php

// Construct PROPERTY PROMOTION

class Humano1
{
  function __construct(public $nome, public $sobrenome)
  {
	$this->nome = $nome;
	$this->sobrenome = $sobrenome;
  }
}

$h1 = new Humano1('Ricardo', 'Cunha');
$h2 = new Humano1('Fabiola', 'Barbosa');

echo $h1->nome . ' ' . $h1->sobrenome;
echo '<br>';
echo $h2->nome . ' ' . $h2->sobrenome;

}

?>
