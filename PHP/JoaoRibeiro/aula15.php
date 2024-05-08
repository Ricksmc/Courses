<?php

// Estrutura condicional Switch

$nome = 'Pedro';

switch($nome){
   case 'Joao':
	echo 'O nome é João';
	break;
   case 'Pedro':
	echo 'O nome é Pedro';
	break;
   case 'Ricardo':
	echo 'O nome é Ricardo';
	break;
   default:
	echo 'O nome não está cadastrado';
	break;
}
// Pode também usar o switch da seguinte forma:
/*     switch($variavel):
         case 'valor':
          #codigo
  	  break;
        default:
         #codigo
         break;
      endswitch;
*/

?>
