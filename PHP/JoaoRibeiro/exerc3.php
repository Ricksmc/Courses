<?php

$nome = 'Ricardo';
$sobrenome = 'Cunhã';
$nome_completo = "$nome $sobrenome";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exerc3 PHP</title>
</head>
<body>
  <p>
    <?php
	echo $nome_completo;
    ?>
 </p>
  <p>
    <?php
	echo 'O meu nome completo tem'.' '.mb_strlen($nome_completo).' '.'caracteres';
    ?>
 </p>
</body>
</html>
