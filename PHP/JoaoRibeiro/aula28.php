<?php

// Variáveis com escopo global e local

$var = 10;

echo "<p>$var</p>";

function funcao($a,$b){

 echo "<p>$var</p>"; // Este valor não será apresentado pois a variável $var é global
 echo "<p>$a e $b</p>";
}
funcao(20,30);

echo '<hr>';

$n = 10;

function fun(){
  global $n;
  $n = 200;
}
fun();

echo "<p>$n</p>";

echo '<hr>';

// Existe uma segunda opção para fazer a mesma funcionalidade da anterior
// Utilizando uma funcionalidade incluída na biblioteca do PHP

$b = 100;

function fun2(){
 $GLOBALS['b'] = 2000;
}
fun2();
echo "<p>$b</p>";

// ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL
echo '<hr>';

if(true){
 $v = 10;
}
echo "<p>$v</p>";

for ($i = 0;$i<10;$i++){
 $t = 1000;
}
echo "<p>$i e $t</p>";

?>
