<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
        $soma = $valor1 + $valor2;
        
    ?>
    
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">valor 1:</label>
            <input type="number" name="v1" id="idv1" value="<?=$valor1?>">

            <label for="v2">valor 2:</label>
            <input type="number" name="v2" id="idv2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>      
    </main>
    <section>
        <h2>Resultado</h2>
        <p>A soma de <strong><?= $valor1 ?></strong> + <strong><?= $valor2 ?></strong> é: <strong><?= $soma ?></strong></p>
    </section>
</body>
</html>