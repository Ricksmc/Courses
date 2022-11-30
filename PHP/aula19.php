<?php

// Estrutura condicional While

$x = 1;
while ($x < 10){
    echo 'ciclo em execução<br>';
    $x++;
}
echo '<hr>';

// Mesma estrura sendo codificada de outra forma

$i = 0;
while ($i < 10){
 echo $i++ . '<br>';
}
echo '<hr>';

// Da mesma forma, podemos usar um exemplo mais simples ainda

$p = 0;
while($p < 10) echo $p++ . '<br>';

/* Importante destacar que só pode ser usado desta forma quando tiver apenas um comando para
ser executado dentro do while. Se existissem mais processos para executar aí se torna obri_
gatório o uso de chaves no while */ 

?>
