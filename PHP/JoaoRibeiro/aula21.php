<?php

// Estrutura condicional FOR

for ($x = 1; $x < 10; $x++){

	echo $x . '<br>';

}
echo '<hr>';

// Também pode ser usado sem chaves assim como nas outras condicionais

for($y = 1; $y < 10; $y++)

    echo $y . '<br>';

echo '<hr>';
//Uma outra alternativa que pode ser utilizada ocasionando o mesmo efeito

$i = 1;
for (;$i < 10;){

    echo $i++ . '<br>';
}
echo '<hr>';

//Outro exemplo de utilização do for

for ($contador = 1, $x = 10; $contador < 10; $contador++, $x--){

	echo $x . '<br>';
}
echo '<hr>';

//Também pode ser usado para apresentar dados de um array

$nome = ['joao', 'ana', 'carlos'];

for ($i = 0; $i < sizeof($nome); $i++){
//pode ser usado também a função 'count' no lugar de 'sizeof'.

	echo $nome[$i] . '<br>';
}

?>
