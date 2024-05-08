<?php
// Estrutura condicional DO WHILE

$x = 0;
do{
  echo $x++ . '<br>';
}while($x < 10);

echo '<hr>';

/*  Da mesma forma que o while, quando se tem apenas um comando para ser executado dentro
da estrutura DO, podemos ignorar as chaves, ficando o código assim: */

$y = 0;

do
   echo $y++ . '<br>';
while($y < 10);

echo '<hr>';

//Outra forma de escrever este mesmo código porém não é o recomendado para se utilizar.

$z = 0;
do echo $z++ . '<br>'; while($z < 10);

?>
