<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="style07.css">
</head>
<body>
	<header>
		<h1>Acesso autorizado</h1>
	</header>
	<main>
		<?php
			$n = $_GET["nome"];
			$s = $_GET["sobrenome"];
			echo "<p>Bem-vindo(a)<strong>$n $s</strong>";
		?>
		<p>
		  	<a href="javascript:history.go(-1)">Fazer LogOff no Sistema</a>
		</p>
	</main>
</body>
</html>
