<?php

//Trabalhando com Arrays

$valores = [1,2,3,10,20,30];
$nomes = ['joao','ana','carlos'];

echo $valores[0];
echo '<br>';
echo $nomes[1];

// Também pode usar desta forma, atribuindo a um índice de um array um valor
echo '<br>';
$dados = [

   10 => 1000,
   20 => 2000,
   30 => 3000
];

// se for adic um novo valor ao array, ele vai assumir o último índice + 1
$dados[] = 4000;
echo $dados[30];
echo '<br>';
echo $dados[31];

// Outra forma de adicionar um  novo valor ao array é utilizando o seguinte comando:

array_push($dados, 5000);
echo '<br>';
echo 'Os valores contidos no Array são:'.$dados[10].' '.$dados[20].' '.
$dados[30].' '.$dados[31].' '.'e'.' '.$dados[32];

// Utilizando aspas duplas pode-se resumir mais a linha de código, ficando assim:
echo '<br>';
echo "Os valores contidos no Array são: $dados[10], $dados[20], $dados[30],
$dados[31] e $dados[32]";

?>
