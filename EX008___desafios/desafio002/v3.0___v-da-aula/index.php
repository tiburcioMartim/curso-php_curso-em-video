<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gerador de Número Aleatório</h1>
    </header>
    <section>
        <?php 
            $min = 0;
            $max = 100;
            $result = mt_rand($min, $max);

            echo "<p>Gerando um número aleatório entre $min e $max:<br></p>";
            echo "O número gerado é: <strong>$result</strong><br><br>";
        ?>
        <button onclick="javascript:document.location.reload()">Recarregar</button>
    </section>
</body>
</html>

