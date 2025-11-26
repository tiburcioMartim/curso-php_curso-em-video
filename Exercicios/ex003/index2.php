<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>

    <?php 
        /*
            O que são variáveis e constantes?     
            Onde as variáveis ficam armazenadas no hardware?
                As variáveis e constantes ficam armazenadas na memória do servidor

                O que vai para o cliente é apenas o resultado

                ASCII funciona caracteres apartir do 128 em diante
        */
        $nome = "Martim";
        $sobrenome = "Tiburcio";
        const PAIS = "Brasil";
        
        echo "Muito prazer $nome $sobrenome, você mora no " . PAIS . "<br>";
        
        $nome = "Emmanuel";
        
        echo "Muito prazer $nome $sobrenome";
    ?>
</body>
</html>