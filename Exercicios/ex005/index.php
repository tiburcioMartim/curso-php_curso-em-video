<?php 
/*
    ;;;;;;;;;
    ;STRINGS;
    ;;;;;;;;;

    single-quote
        Não interpreta o conteúdo da string

    double-quotes
        É como a crase no JS
        Interpreta o conteúdo da string
        Exe.: "PHP \u{1F418}"
    
    Heredoc
        //interpreta a string
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
                Estou estudando
                    $curso em $ano.
            FRASE;
    Nowdoc
        //NÃO interpreta a string
        $curso = "PHP";
        $ano = date('Y');
        echo <<< 'FRASE'
                Estou estudando
                    $curso em $ano.
            FRASE;

    Concatenar Strings
        Operador [.]
    
    Escape Sequences
        \n      Nova linha
        \t      Tabulação horizontal
        \\      Barra invertida
        \$      Sinal de cifrão
        \u{}    Codepoint Unicode
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strings</h1>
    <?php 
        $nome = 'Martim';
        echo "PHP \u{1F418} <br>";
        echo 'PHP \u{1F418} <br>';
        echo "Olá $nome <br>";
        echo 'Olá $nome <br> <br>';
        

        const ESTADO = "RJ";
        $ESTADO = ESTADO;
        echo "Moro no ESTADO <br>";
        echo "Moro no $ESTADO <br>";

        //Saida só funciona em texto não em html - heredoc
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
                Estou estudando
                    $curso em $ano.
            FRASE;

    ?>
</body>
</html>