<?php
// Trabalhando com Herança de classes

class Animal{

public $especie;
public $peso;

   function tipoEspecie(){
	return 'Este animal é da espécie' .' '. $this->especie;
   }
}

class Mamifero extends Animal{

public $qtdpatas;
public $tem_pelo;

   function qtdPatas(){
	return 'O animal da espécie' .' '. $this->especie .' '. 'tem' .' '. $this->qtdpatas . ' ' . 'patas';
   }
}

$animal1 = new Mamifero();
$animal1->especie = 'Cavalo';
$animal1->qtdpatas = 4;

echo $animal1->tipoEspecie();
echo '<br>';
echo $animal1->qtdPatas();
?>
