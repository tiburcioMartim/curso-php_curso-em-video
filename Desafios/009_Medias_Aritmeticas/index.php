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
        $valor1 = $_GET["valor1"]??0;
        $valor2 = $_GET["valor2"]??0;
        $peso1 = $_GET["peso1"]??1;
        $peso2 = $_GET["peso2"]??1;
        $soma_pesos = $peso1 + $peso2;
        $media_simples = ($valor1 + $valor2) / 2;

        try {
            if ($soma_pesos == 0) {
                throw new DivisionByZeroError("A soma dos pesos zero não é possível, coloque um valor a partir de 1.");
            }
        } catch (DivisionByZeroError $e) {
            $soma_pesos = 1;
            echo "<script>alert('Erro no cálculo: " . $e->getMessage() . "');</script>";
        }

        $media_ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($soma_pesos);
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="id-valor1" placeholder="Digite um valor." value="<?=$valor1?>" required>

            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="id-peso1" placeholder="Digite um peso." value="<?=$peso1?>" required>

            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="id-valor2" placeholder="Digite um valor." value="<?=$valor2?>" required>

            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="id-peso2" placeholder="Digite um peso." value="<?=$peso2?>" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($media_simples, 2, ',', '.')?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($media_ponderada, 2, ',', '.')?>.</li>
        </ul>
    </section>
</body>
</html>