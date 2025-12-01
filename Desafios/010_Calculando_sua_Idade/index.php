<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $ano_nasceu = $_GET["ano_nasceu"]??0;
        $ano_calculo = $_GET["ano_calculo"]??0;
        $calculo = $ano_calculo - $ano_nasceu;
        $data = date('Y');

    ?>
    
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="ano_nasceu">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasceu" id="id-ano_nasceu" placeholder="Digite um ano." value="<?=$ano_nasceu?>">

            <label for="ano_calculo">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$data?></strong>)</label>
            <input type="number" name="ano_calculo" id="id-ano_calculo" placeholder="Digite um ano." value="<?=$ano_calculo?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$ano_nasceu?> vai ter <strong><?=$calculo?> anos</strong> em <?=$ano_calculo?>!</p>
    </section>
</body>
</html>