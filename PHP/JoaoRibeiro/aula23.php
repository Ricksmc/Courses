<?php

// Trabalhando com as funções especiais BREAK, CONTINUE e GOTO

// BREAK - EXEMPLO 1

for ($i = 0; $i < 20; $i++){

	echo $i . '<br>';
  
    if ($i == 10){
	break;
    }
}
echo '<hr>';
// BREAK - EXEMPLO 2

$nomes = ['joao', 'ana', 'mario'];

    foreach($nomes as $nome){

	echo $nome . '<br>';

    if ($nome == 'ana'){

	break;
    }
}
echo '<hr>';

// CONTINUE - EXEMPLO 1

for($i = 0; $i < 20; $i++){

	if($i == 10){

	   continue;
        }
	echo $i . '<br>';
}
echo '<hr>';

// CONTINUE - EXEMPLO 2

$nomes = ['joao', 'ana', 'carlos'];

     foreach($nomes as $nome){

	if($nome =='ana'){

           continue;
	}
	echo $nome . '<br>';
}
echo '<hr>';

// GOTO - EXEMPLO

for($i = 0; $i < 20; $i++){

    if($i == 10){

	goto valor;
    }
    echo $i . '<br>';
}

echo 'fim do loop';

  valor:

    echo 'AQUI';

?>
