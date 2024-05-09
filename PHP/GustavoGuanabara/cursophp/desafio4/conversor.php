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
		<h1 align="center">Conversor de Moedas v2.0</h1>
            <main>
            <?php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo
                (dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&
                @dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=cotacaoCompra%20desc&$format=json&
                $select=cotacaoCompra';
                $dados = json_decode(file_get_contents($url), true);
                
                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $valor = $_GET["valor"];

                $convert = ($valor / $cotacao);
                
                echo "Seus R$ $vlr equivalem a <strong>US$ $convert";
            ?>
            </main>    
        <font size="2">* Cotação obtida diretamente do site do Banco Central do Brasil</font>
        <a href="javascript:history.go(-1)"><button><style="font-size:50px">&#9204</style>Voltar</button></a>
    </section>
</body>
</html>