<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $numero = $_GET["numero"]??0;
        $raiz_quadrada = number_format($numero ** (1/2), 3, ',', '.')??0;
        $raiz_cubica = number_format($numero ** (1/3), 3, ',', '.')??0;
        
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="id-numero" placeholder="Digite um número.">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?=$numero?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$raiz_quadrada?></strong></li>
            <li>A sua raiz cúbica é <strong><?=$raiz_cubica?></strong></li>
        </ul>
    </section>
</body>
</html>