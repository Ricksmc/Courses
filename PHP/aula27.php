<?php

// Funcionalidade RETURN numa função

function falar()
{
	return;
	echo 'Não vai ser apresentado este texto';
}

echo '<hr>';

function soma($a,$b)
{
	$resultado = $a + $b;
	return $resultado;
}
echo soma(10,20);

echo '<hr>';

function avaliarNome($n)
{
	if ($n == 'joao'){
	  return true;
	} else{
	 return false;
	}
}
$nome = 'joao';

  if (avaliarNome($nome)){
	echo 'O nome está correto';
}
echo '<hr>';

// Uma função sem qualquer valor de retorno, devolve sempre um valor nulo
// Ex.:

function fala(){
	// função sem argumentos, nem parâmetros e nem código de execução
}
if(fala() === null){
  echo 'Função com retorno igual a nulo';
}

?>
