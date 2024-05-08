<?php
// FUNÇÕES ANÔNIMAS

$a = function(){
	echo '<h2>Olá</h2>';
};
$a();

echo '<hr>';

// Outro exemplo de uso de função anônima

$falar = function($msg){
	echo "<h2>Eu digo: $msg</h2>";
};
$falar('Estou aqui');

echo '<hr>';

// Mais um exemplo

$andar = function($metros){
	return "<h2>Andei $metros metros</h2>";
};
echo $andar(100);

// Mais um exemplo
echo '<hr>';

$z = function(){
  return '<h2>Meu nome é Jhonny</h2>';
};
function diz($j){
  echo $j;
}
diz($z());

?>
