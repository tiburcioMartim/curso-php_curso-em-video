<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <section>
        <?php //Analisador de número real, exibe a parte inteira de um número real e exibe a parte fracionária do número.

            //Nesse caso não há necessidade de usar a conversão de número para string, porque ao usuário informar o número, ele é convertido automáticamente para string.
            //O valor de coalesencia nula é para o caso de enviar o formulário sem dados, ele irá preencher com o valor 0
            $numberIn = $_GET['analisar'] ?? 0;
            $int = (int) $numberIn;
            $frac = $numberIn - $int;

            echo "Analisando o número <strong>" . number_format($numberIn, 3, ",", ".") . "</strong> informado pelo usuário.<br>";
            
            echo "<ul><li>A parte inteira é: <strong>$int</strong></li>";
            echo "<li>A parte decimal é: <strong>$frac</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        <!-- <button type="button" onclick="javascript:document.location.href='index.php'">Voltar</button> -->
    </section>
</body>
</html>