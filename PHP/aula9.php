<?php

$q = '<br>';
$frase = 'Esta frase tem 29 caracteres.';

// Verifica o total de caracteres numa frase
$totalcaracteres = strlen($frase);
echo $totalcaracteres;

echo $q;
echo '================================================';
echo $q;

// Apresenta as letras da frase da posição 0 até a posição 4
$primeirapalavra = substr($frase,0,4);
echo $primeirapalavra;

echo $q;
echo '================================================';
echo $q;

// Converte toda a String em letras maiúsculas
$maiusculas = strtoupper($frase);
echo $maiusculas;

echo $q;
echo '================================================';
echo $q;

// Converte toda a String em letras minúsculas
$minusculas = strtolower($frase);
echo $minusculas;

echo $q;
echo '================================================';
echo $q;

// Substitui uma letra por outra na string
echo $q;
$nova_frase = str_replace('a','x',$frase); // onde tiver letra 'a' na frase vai subst por 'x'
echo $nova_frase;

echo $q;
echo '================================================';
echo $q;

// Substitui uma letra por outra na string
$posicao = strpos($frase,'a');
echo $posicao;

echo $q;
echo '================================================';
echo $q;
 
echo 'Demais formas de uso de Strings no PHP podem ser consultadas'.' '.'<a href="https://www.php.net/manual/pt_BR/ref.strings.php">aqui</a>';
?>
