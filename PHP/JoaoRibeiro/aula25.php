<?php

// Trabalhando com funções - parte 2

function adicionar($a,$b){

    echo "$a + $b = " . ($a+$b);
    echo '<br>';
}

adicionar(10,20);

echo '<hr>';

// Se colocar mais valores a função será executada novamente.

// Ex.:

soma(10,20);
soma(2,3);
soma(4,4);

function soma($a,$b){

    echo "$a + $b = " . ($a+$b);
    echo '<br>';
}

// Outro exemplo agora utilizando um Array
echo '<hr>';

$nomes = ['Pedro', 'Maria', 'Joaquim'];

foreach($nomes as $nome){

	saudacao($nome);
}

function saudacao($valor){
	
	echo "Bom dia, $valor <br>";
}

// Também pode-se atribuir valores dentro do parâmetro
//Ex.:
echo '<hr>';

function multiplicar($a, $b = 2){

	echo $a * $b;
	echo '<br>';
}

multiplicar(10);
multiplicar(10,6);

// No  PHP 8 foi introduzida uma nova função chamada Named Arguments
//Ex.:
echo '<hr>';

function mais($a, $b = 10, $c = 30){

	echo $a + $b + $c;
	echo '<br>';
}

mais(c:1000,a:0);
mais(a:12,c:100);
mais(a:1,b:4,c:3); //forcei para que cada variavel receba um valor específico utilizando (:)

?>

