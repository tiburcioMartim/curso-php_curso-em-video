<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>
    <section>
        <?php //Mostrar um número, seu antecessor e seu sucessor.
            $numero = $_GET["chosenNumber"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "O número escolhido é: <strong>$numero</strong> <br><br>";
            echo "Seu antecessor é: <strong>$antecessor</strong> <br><br>";
            echo "Seu sucessor é: <strong>$sucessor</strong> <br><br>";
        ?>
        <!-- Volta uma página pelo histórico -->
        <button onclick="history.back()">Voltar</button>

        <!-- Busca o arquivo index.html -->
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>

    </section>
</body>
</html>