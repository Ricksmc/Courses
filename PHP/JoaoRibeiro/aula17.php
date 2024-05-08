<?php

//Trabalhando com operador ternário

$opcao = 1;

$nome = $opcao == 1 ? 'joao' : 'Marcela';

echo $nome;

echo '<br>';
echo ' =============================== ';
echo '<br>';

// Tambem pode se utilizar de outrs forma

$opcao == 1 ? $nome = 'joao' : $nome = 'Renata';
echo $nome;

echo '<br>';
echo ' =============================== ';
echo '<br>';

echo $opcao == 1 ? 'SIM' : 'NÃO';

echo '<br>';
echo ' =============================== ';
echo '<br>';

?>

<h3> Também pode ser utilizado juntamente com html</h3>

<h2><?= $opcao == 1 ? 'SIM' : 'NÃO' ?></h2>

<?php
echo '<br>';
echo ' =============================== ';
echo '<br>';
?>

<h3>Podemos utilizar para controlar CSS</h3>

<h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>">Este texto tem cor definida pelo PHP</h2>

