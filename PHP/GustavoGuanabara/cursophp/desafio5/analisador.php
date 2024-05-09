<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>conversor</title>
</head>
<body>
    <section>
                <h1 align="center">Analisador de Número Real</h1>
        <main>    
            <?php
                $valor = $_GET["valor"];          
                echo "Analisando o número <strong>$valor</strong> informado pelo usuário:";
                $parteInteira = (int)$valor;
                $parteFracionaria = round(($valor - $parteInteira) * 1000);
            ?>

        <font size="2">
            <ul>
                <li>
                    <?php 
                        echo "A parte inteira do número é <strong>$parteInteira</strong>";
                    ?>                
                </li>
                <li>
                    <?php
                        echo "A parte fracionária do número é <strong>$parteFracionaria</strong>";
                    ?>
                </li>
            <ul>
        </font>
        </main>
        <a href="javascript:history.go(-1)"><button><style="font-size:50px">&#9204</style>Voltar</button></a>
    </section>
    
</body>
</html>