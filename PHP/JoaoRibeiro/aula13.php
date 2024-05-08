<?php

// Trabalhando com arrays multidimensionais

$dados = [

   [10,20,30,40],
   [100,200,300,400],
   [1000,2000,3000,4000]
];

echo $dados[1][2];
echo '<br>';
echo ' ========================== ';
echo '<br>';
$cidades = [

   'portugal' => ['Lisboa','Porto','Coimbra'],
   'brasil' => ['Brasilia','São Paulo','Recife'],
   'espanha' => ['Madrid','Barcelona','Sevilha']
];

echo $cidades['brasil'][2];
echo '<br>';
echo '<br>';
echo $cidades['portugal'][0];
echo '<br>';
echo '<br>';
echo $cidades['espanha'][1];

?>

