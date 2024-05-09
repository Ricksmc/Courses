<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
                <h1>Resultado Final</h1>
        </header>
        <main>
                <?php
                        $valor = $_GET["numero"];
			$ant = $valor - 1;
			$suc = $valor + 1;
			echo "O NúMero escolhido foi <strong>$valor</strong><br>";
			echo "O seu antecessor é $ant<br>";
			echo "O seu sucessor é $suc<br>";
                ?>
                <p>
                        <a href="javascript:history.go(-1)"><button><style="font-size:50px">&#9204</style>Voltar</button></a>
                </p>
        </main>
</body>
</html>
