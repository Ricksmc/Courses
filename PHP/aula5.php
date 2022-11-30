<?php

$nome = 'Ricardo';
$sobrenome = 'Cunha';

echo $nome . ' ' . $sobrenome;
echo '<br>';
echo '===============================================';
echo '<br>';
echo $nome.' '.'Santos'.' '.'Melo'.' '.$sobrenome;
echo '<br>';
echo '===============================================';
echo '<br>';
$meio = 'Santos Melo';
$nome_completo = "$nome $meio $sobrenome";
echo $nome_completo;
echo '<br>';
echo '===============================================';
echo '<br>';
$cliente = 'Fernando Antonio';
$email = 'fernando@mymail.com';
$texto = <<<LABEL
Hy Mr. $cliente.<br>
I'm writing this message to advice that you are subscrited on the next course.<br>
We have send the document to the email $email.<br>
Thanks for your attention.
LABEL;
echo $texto;
echo '<br>';
echo '===============================================';
echo '<br>';

die();
?>
