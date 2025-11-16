<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        <?php //Gerar um número aleatório entre 0 e 100.
            $gerarNumero = $_GET["gerarNumero"];

            echo "<br>";
            echo "<strong>" . mt_rand(0, 100) . "</strong>";
            echo "<br><br>";
        ?>

        <button onclick="javascript:window.location.href='index.php'">Voltar</button>
    </section>
</body>
</html>