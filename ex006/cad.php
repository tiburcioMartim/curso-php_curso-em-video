<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
        <p>Você conseguiu!</p>
    </header>
    <main>
        <?php 
            /*
                Existem 3 variáveis super globais
                    $_GET
                    $_POST
                    $_COOKIES

                    $_REQUEST //é uma junção das variáveis $_GET; $_POST; $_COOKIES
             */
        
            $nome = $_GET["nome"] ?? "";
            $sobrenome = $_GET["sobrenome"] ?? "";
            echo "É um prazer te conhecer $nome $sobrenome.";

            // var_dump($_GET)
        ?>
    </main>
</body>
</html>