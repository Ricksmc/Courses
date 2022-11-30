<?php

$q = '<br>';

//NOVAS FUNÇÕES DE STRINGS ADICIONADAS NO PHP 8

$nome = 'Ana Maria Silva Cardoso';

//str_contains()
$x = str_contains($nome, 'Silva');
echo $x;

echo $q;
echo '==============================';
echo $q;

//str_starts_with()
$x = str_starts_with($nome, 'Ana'); //true
$x = str_starts_with($nome, 'ana'); //false
echo $x;

echo $q;
echo '==============================';
echo $q;

//str_ends_with()
$x = str_ends_with($nome, 'oso'); //true
$x = str_ends_with($nome, ' oso'); //false

?>
