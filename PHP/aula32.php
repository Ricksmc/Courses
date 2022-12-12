<?php

// Atributos e métodos

class Humano{

   public $nome = 'Ricardo';
   public $apelido = 'Cunha';

   public function nomeCompleto(){
	return $this->nome . ' '.$this->apelido;
   }
}
$homem = new Humano();

echo $homem ->nomeCompleto();

?>
