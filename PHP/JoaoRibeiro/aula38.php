<?php

// Trabalhando com Override em Classes - Parte 2

class Retangulo{

public $largura;
public $altura;

   function __construct($l,$a){

	$this->largura = $l;
	$this->altura = $a;
   }

   function calcularArea(){
	return $this->largura * $this->altura;
   }
}

class Quadrado extends Retangulo {

   function __construct($l){

	$this->largura = $l;
	$this->altura = $l;
   }
}

$ret = new Retangulo(10,20);
$quad = new Quadrado(10);

echo $ret->calcularArea();
echo '<br>';
echo $quad->calcularArea();

// Parent Class (classes Pai)
echo '<hr>';
class Quadrado1 extends Retangulo{

   function __construct($l){
	parent::__construct($l,$l);
   }
}

$quad1 = new Quadrado1(5);
echo $quad1->calcularArea();

?>
