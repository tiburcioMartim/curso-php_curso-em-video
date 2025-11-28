<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php //API salário mínimo
        $url = 'https://api.bcb.gov.br/dados/serie/bcdata.sgs.1619/dados/ultimos/1?formato=json';
        
    ?>

    <?php //Salário | Lógica
        $padrao = numfmt_create('pt-br', NumberFormatter::CURRENCY);
        $salario = $_GET['salario']??0;
        $salario_fmt = numfmt_format_currency($padrao, $salario, "BRL");
        $calc_salario = $salario / 1380; //puxar salário mínimo por API == 1.449
        $qt_sal_min = (int)$calc_salario;
        $calc_resto = numfmt_format_currency($padrao, $salario - (1380 * $qt_sal_min), 'BRL');
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="id-salario" value="" step="any"> 
            <p>Considerando o salário mínimo de <strong><?=$salario_fmt?></strong></p>
            <input type="submit" value="Calcular">          
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            if ($qt_sal_min > 1) {
                echo "<p>Quem recebe um salário de $salario_fmt ganha <strong>$qt_sal_min salários mínimos</strong> + $calc_resto.</p>";
            } else {
                echo "<p>Quem recebe um salário de $salario_fmt ganha <strong>$qt_sal_min salário mínimo</strong> + $calc_resto.</p>";
            }
        ?>
    </section>
</body>
</html>