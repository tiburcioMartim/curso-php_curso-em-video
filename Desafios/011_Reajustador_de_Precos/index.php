<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor_produto = $_POST["valor_produto"];
        $percentual = $_POST["percentual"];
        $valor_reajustado = $valor_produto * ($percentual / 100 + 1);

        $padrao = numfmt_create('pt-br', NumberFormatter::CURRENCY);

    ?>

    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <label for="valor_produto">Preço do Produto (R$)</label>
            <input type="number" name="valor_produto" id="id-valor_produto" value="<?=$valor_produto?>">

            <label for="percentual">Qual será o percentual de reajuste? (<output id="range_valor"><?=$percentual?></output>%)</label>
            <input type="range" name="percentual" id="id-percentual" min="0" max="100" value="<?=$percentual?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?=numfmt_format_currency($padrao, $valor_produto, "BRL")?> com <strong><?=$percentual?>% de aumento</strong> vai passar a custar <strong><?=numfmt_format_currency($padrao, $valor_reajustado, "BRL")?></strong> a partir de agora.</p>
    </section>

    <!-- Porcentagem dinamica -->
    <script>
        const rangeInput = document.getElementById('id-percentual');
        const rangeValor = document.getElementById('range_valor');

        rangeInput.addEventListener('input', () => {
            rangeValor.textContent = rangeInput.value;
        });
    </script>
</body>
</html>