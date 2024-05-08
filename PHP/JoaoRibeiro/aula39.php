<?php

// Impedir Herança com a expressão final

class Veiculo{

  final function mover(){
	echo 'Mover da classe veiculo';
   }
}

class Bicicleta extends Veiculo{

   function mover(){
	return 'Mover da classe bicicleta';
   }
}

//////////////////////////////////////////////

final class Humano{

   function teste(){
	echo 'teste';
   }
}
class Homem extends Humano{

}

$a = new Homem();
$a->teste();

 ?>
