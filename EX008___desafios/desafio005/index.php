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
        <form action="analisador-de-numero.php" method="get">
            <label for="analisar">Analisar:</label>
            <input type="number" name="analisar" id="id-analisar" step="any" required>

            <!-- Quando clicado, dispara a ação definida no atributo action do formulário -->
            <!-- Geralmente uma requisição HTTP POST ou GET -->
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>