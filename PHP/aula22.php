<?php

//Estrutura FOREACH

$nomes = ['joao', 'ana', 'carlos'];
  
  foreach($nomes as $nome){

    echo $nome . '<br>';
}
echo '<hr>';

// Também podemos utilizar o foreach em arrays associativos, por exemplo:

$capitais = [

    'Portugal' => 'Lisboa',
    'Brasil' => 'Brasília',
    'Espanha' => 'Madrid'
];

foreach($capitais as $nomepais => $nomecidade){

    echo "A capital de $nomepais é $nomecidade<br>";
}
?>
