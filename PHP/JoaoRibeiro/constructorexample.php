<?php

// Exemplo de Property Constructor

class Humano1{

  function __construct(public $nome,public $sobrenome){

     $this->nome = $nome;
     $this->sobrenome = $sobrenome; 
  }
}

class Humano2{

   public function falar(){
	return 'Bloco de código da função falar';
   }

   private function andar(){
	echo 'Bloco de código da função andar';
   }

   public function movimento(){
	$this->andar();
   }
}

$h1 = new Humano1('Ricardo','Cunha');
$h2 = new Humano1('Jose','Oliveira');

$m1 = new Humano2();

echo $h1->nome . ' ' . $h1->sobrenome;
echo '<br>';
echo $h2->nome . ' ' . $h2->sobrenome;
echo '<br>';
echo $m1->movimento();

?>
