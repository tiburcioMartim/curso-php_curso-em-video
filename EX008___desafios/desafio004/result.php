<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <section>
        <?php //conversor de moedas v2.0, converter real para dolar, exibir a cotação do dollar.         
            $inicio = date("m-d-Y", strtotime("- 7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $real = floatval($_GET["real"]);
            $dolar = $real / $cotacao; 

            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Biblioteca intl (internacionalization PHP)
            //Solução usando biblioteca intl | Forma mais profissional para lidar com moedas internacionais.
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

        ?>
        <button onclick="javascript:document.location.href='index.php'">Voltar</button>
    </section>
</body>
</html>