<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Calculadora de Tempo</h1>        
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="">Qual é o total de segundos?</label>
            <input type="number" name="" id="">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, 450 segundos equivalem a um total de:</p>
        <ul>
            <li>0 semanas</li>
            <li>0 dias</li>
            <li>0 horas</li>
            <li>0 minutos</li>
            <li>0 segundos</li>
        </ul>
    </section>
</body>
</html>