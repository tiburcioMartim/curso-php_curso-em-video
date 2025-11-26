<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <section>
        <?php //conversor de moedas v1.0, converter real para dolar, exibir a cotação do dollar.
            $real = floatval($_GET["real"]);
            $dolar = $real / 5.3;            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //Biblioteca intl (internacionalization PHP)

            //Solução usando biblioteca intl | Forma mais profissional para lidar com moedas internacionais.
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

            /* Forma menos profissional
                echo "<br>";
                echo "O valor de <strong>R$" . number_format($real, 2, ',', '.') . "</strong> convertido para dollar é: <strong>U$" . number_format($dolar, 2, ',', '.') . "</strong>";
                echo "<br><br>";
            */            
        ?>
        <button onclick="javascript:document.location.href='index.php'">Voltar</button>
    </section>
</body>
</html>