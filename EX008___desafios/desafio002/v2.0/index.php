<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Gerador de Número Aleatório</h1></header>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label>Clique para gerar um número entre 0 e 100.</label><br>
            <input type="hidden" name="gerarNumero" value="true">
            <input type="submit" value="Gerar">
        </form>

        <?php //Gerar um número aleatório entre 0 e 100.
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $gerarNumero = $_POST["gerarNumero"] ?? "";
                $hRef = "javascript:window.location.href='index.php'";

                echo "<br>";
                echo "<strong>" . mt_rand(0, 100) . "</strong>";
                echo "<br><br>";
                echo "<button onclick=$hRef>Voltar</button>";
            }
            
        ?>

    </section>
</body>
</html>

