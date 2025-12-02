<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        $total_segundos = $_GET["total_segundos"]??0;
        define('SEMANAS', 604800);
        define('DIAS', 86400);
        define('HORAS', 3600);
        define('MINUTOS', 60);
        define('SEGUNDO', 1);

        $semanas = (int)($total_segundos / SEMANAS);
        $segundos_restantes = $total_segundos % SEMANAS;

        $dias = (int)($segundos_restantes / DIAS);
        $segundos_restantes = $total_segundos % DIAS;

        $horas = (int)($segundos_restantes / HORAS);
        $segundos_restantes = $total_segundos % HORAS;
        
        $minutos = (int)($segundos_restantes / MINUTOS);
        $segundos_restantes = $total_segundos % MINUTOS;
        
        $segundos = (int)($segundos_restantes / SEGUNDO);
        $segundos_restantes = $total_segundos % SEGUNDO;
    ?>

    <main>     
        <h1>Calculadora de Tempo</h1>        
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="total_segundos">Qual é o total de segundos?</label>
            <input type="number" name="total_segundos" id="id_total_segundos" value="<?=$total_segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total_segundos, 0, null, '.')?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>