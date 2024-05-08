<?php

//Funções Closure

$x = 20;
$y = 30;

$v = function($z) use($x,$y){
	echo "<p>$x - $y - $z</p>";
};
$v(10);

echo '<hr>';

// podemos fazer o mesmo exemplo acima utilizando Arrow Functions, simplificando a
// quantidade de linhas de código

$a = 20;
$b = 30;

$n = fn($c) => "$a - $b - $c";

echo $n(10);

 ?>
