<!-- conversor de moedas v2.0, converter real para dolar, exibir a cotação do dollar. -->
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
        <?php 
            //date() | Formatar data e hora local
            //strtotime() | Timestamp "exe. (now, tomorrow, next Monday, ...)"
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            //URL da API
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            
            
            
            
            //json_decode() | Converte JS objt em PHP objt | true return array | void return object
            //file_get_contents() | Ler todo o conteúdo de um arquivo ou uma URL; Retornar uma única string
            $dados = json_decode(file_get_contents($url), true);
            
            
            //$dados["value"][0]["cotacaoCompra"] | Acessando o dado através do vetor
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            

            //Receber valor informado pelo usuário
            $real = $_GET["real"];


// var_dump($_GET["real"]); //coerção automática
// echo "<br><br>";

// var_dump(floatval($_GET["real"])); //conversão explicita | ligeiramente + rápida em loops longos
// echo "<br><br>";

// var_dump((float) $_GET["real"]); //conversão explicita | ligeiramente + rápida em loops longos
// echo "<br><br>";


            $dolar = $real / $cotacao; 

            //numfmt_create()
            //Retorna uma instância da classe NumberFormatter (do módulo Intl)
            //Formata números de forma sensível à localidade (idioma, país, etc.) e ao estilo desejado (moeda, porcentagem, decimal, científico, etc.).
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            
            //numfmt_format_currency()
            //Recebe um valor numérico e um código de moeda (como 'USD', 'EUR', 'BRL').
            //Retorna o valor formatado como uma string de moeda, incluindo o símbolo da moeda, o separador de milhares e o separador decimal apropriados para a localidade do formatador.
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

        ?>
        <button onclick="javascript:document.location.href='index.php'">Voltar</button>
    </section>
</body>
</html>