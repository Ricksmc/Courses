<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados do Servidor</title>
</head>
<body>
	<h1>Exemplo de código PHP</h1>
	<?php
		date_default_timezone_set("America/Recife"); //ao utilizar este comando, estou definindo o horario local
		echo "Hoje é dia " . date("d/M/Y");
		echo " e a hora atual é " . date("G:i:s");
	?>
</body>
</html>
