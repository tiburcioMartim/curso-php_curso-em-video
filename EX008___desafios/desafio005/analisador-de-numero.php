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
            $numberIn = $_GET['analisar'];

            //Separando a string com a função explode(), ela usa um separador para fatiar a string em varias posições.
            $numberPieces = explode('.', $numberIn);

            echo "O número analisado é: <strong>$numberIn</strong> <br>";
            echo "A parte inteira é: <strong>$numberPieces[0]</strong> <br>";
            echo "A parte decimal é: <strong>$numberPieces[1]</strong> <br><br>";
        ?>
        <button type="button" onclick="javascript:document.location.href='index.php'">Voltar</button>
    </section>
</body>
</html>