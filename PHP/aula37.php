<?php
// Trabalhando com Override em classes

class Animal{

   function mover(){
	echo 'Mover a partir da classe base';
   }
}

class Mamifero extends Animal{

}

class Peixe extends Animal{

   function mover(){
	echo 'Mover a partir da classe Peixe';
   }
}

$animal = new Animal();
echo $animal->mover();
echo '<br>';

$mamifero = new Mamifero();
echo $mamifero->mover();
echo '<br>';

$peixe = new Peixe();
echo $peixe->mover();

?>
