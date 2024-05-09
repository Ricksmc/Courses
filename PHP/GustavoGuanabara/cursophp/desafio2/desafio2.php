<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Desafio 2</title>
</head>
<body>
        <script>
                function recarregarAPagina(){
                window.location.reload()
                }
        </script>
        <section>
                <h1>Trabalhando com  números aleatórios</h1>
                <P>Gerando um número aleatório entre 0 e 100...</p>
                <?php
                        $vlr = mt_rand(0,100);
                        echo "O valor gerado foi <strong>$vlr</strong>";
                ?>

<button type="button" onClick="recarregarAPagina()">&#128259 Gerar outro</button> 
        </section>
</body>
</html>
