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
		<h1 align="center">Conversor de Moedas v1.0</h1>
            <main>
            <?php
                $valor = $_GET["valor"];
                $convert = ($valor / 5.22);
            // Formatação de moedas com internacionalização
            //Biblioteca utilizada: intl (Internallization PHP)
                $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus " . numfmt_format_currency($default, $valor, "BRL") . " equivalem a" . numfmt_format_currency($default, $convert, "USD");
            ?>
            </main>    
        <font size="2"><strong>* Cotação fixa de R$ 5,22</strong> informada diretamente no código</font>
        <a href="javascript:history.go(-1)"><button><style="font-size:50px">&#9204</style>Voltar</button></a>
    </section>
</body>
</html>