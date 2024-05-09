<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo 8 - PHP</title>
</head>
<body>
	<header>Funções arritméticas</header>
	<main>
		<?php
			$res = abs(-354);
			$v = base_convert(254, 10, 8);
			echo "Valor absoluto: $res, Conversão de base: $v";
		?>
	</main>
</body>
</html>
