<?php
//GENEREATORS

function buscarNumero(){
   for($i=0;$i<10;$i++){
     yield $i;
   }
}
foreach(buscarNumero() as $numero){
	echo "$numero<br>";
}
// Usando Generator Yield From

function buscarNomes(){

yield 'joao';
yield 'maria';
yield from ['carlos','ana','antonio'];
yield 'fernando';
}
echo '<hr>';

foreach(buscarNomes() as $nome){
  echo "$nome<br>";
}

?>
