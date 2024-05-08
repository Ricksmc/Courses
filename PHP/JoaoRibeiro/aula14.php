<?php

// Estruturas condicionais - Parte 1 - IF

$nome = 'Ricardo';

 if($nome == 'Ricardo'){

     echo 'O nome coincide com a variável atribuída'; 
}

echo '<br>';
echo '<br>';
// Estruturas condicionais - Parte 2 - IF/ELSE
$idade = 18;

  if($idade <= 18){
    
    echo 'Adolescente';

} else {

    echo 'Adulto';
}
// Estruturas condicionais - Parte 3 - IF/ELSE/ELSEIF
echo '<br>';
echo '<br>';
$nota = 5;

  if($nota < 6){
	echo 'NOTA BAIXA';
}elseif($nota > 6){
	echo 'NOTA ALTA';
}else{
	echo 'VOCE TIROU ZERO';
}
echo '<br>';
echo '<br>';
// Estruturas condicionais - Parte 4 - IF dentro de outro IF
$numero = 10;
 if($numero >=0){
  if($numero >=100){
	echo 'O numero é igual ou maior que 100';
  }else{
	echo 'O numero é positivo, mas menor que 100';
       }

}else{
	echo 'O numero é negativo';
}

?>
