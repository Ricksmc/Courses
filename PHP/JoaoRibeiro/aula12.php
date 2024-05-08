<?php

// Trabalhando com arrays associativos

$dados_cliente = [

	'nome' => 'Ricardo Santos Melo Cunha',
	'email' => 'ricksmc@mail.com',
	'nacionalidade' => 'Brasil',
	'telefone' => '(81)98888.7040'
];

echo '===== DADOS CADASTRADOS NO SISTEMA =====';
echo '<br>';
echo '<br>';
echo '<strong>Nome:</strong> '.$dados_cliente['nome']; 
echo '<br>';
echo '<br>';
echo '<strong>Email:</strong> '.$dados_cliente['email'];
echo '<br>';
echo '<br>';
echo '<strong>Nacionalidade:</strong> '.$dados_cliente['nacionalidade'];
echo '<br>';
echo '<br>';
echo '<strong>Telefone:</strong> '.$dados_cliente['telefone'];

?>
