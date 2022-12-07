<?php

// Utilização de mais argumentos com apenas um parâmetro

function outraFuncao($a){

	$x = func_get_arg(0);
	$y = func_get_arg(1);
	$z = func_get_arg(2);

	echo "$x - $y - $z";

echo '<br>';
echo '<hr>';
echo func_num_args();

}
outraFuncao(10,20,30);

// Utilizando a funcionalidade Variadic Parameter

echo '<hr>';

function minhaFuncao(...$argumentos)
{
	foreach($argumentos as $v){
		echo "$v<br>";
	}
}
minhaFuncao(10,20,30,40,50,60,70,80);

echo '<hr>';

?>
