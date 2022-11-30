<?php

$x = 12;
switch($x){
   case 5:
     echo 'parou no 5';
     break;
   case 10:
     echo 'parou no 10';
     break;
   case 15:
     echo 'parou no 15';
     break;
   default:
     echo 'é um numero diferente de 5, 10 ou 15';
     break;
}
echo '<hr>';

// Utilizando a instrução Match

echo match($x){
    5 => 'parou no 5',
   10 => 'parou no 10',
   15 => 'parou no 15',
   default => 'é um numero diferente de 5, 10 ou 15'
};
echo '<hr>';
$y = 10;
$opcao = match($y){
   2 => 'o valor é 2',
   4,5,6 => 'O valor é 4, 5 ou 6',
   default => 'O valor é outro'
};
echo $opcao;

echo '<hr>';

//No Match, as comparações sempre são feitas por valor e tipo (= = =)
// ex.:

$valor = '1'; //Note que este valor é uma string e não um inteiro

echo match($valor){
    1 => 'inteiro',
   '1' => 'string'
};

?>
