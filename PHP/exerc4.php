<?php

$nome = 'Ricardo';
$sobrenome = 'Cunha';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exerc4 PHP</title>
</head>
<body>
  <p>
   <?php
	echo "O meu nome é".' '.strtolower($nome).' '."e o meu sobrenome é".' '.strtolower($sobrenome);
   ?>
  </p>
</body>
</html>
