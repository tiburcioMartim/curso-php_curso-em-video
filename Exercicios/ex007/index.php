<!-- Funções aritméticas -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções matemáticas</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <header>
        <h1>Funções matemáticas</h1>
    </header>
    <section>
        <?php 
            $r = abs(-2000);
            echo "abs(-2000) = $r <br>";
            echo "<hr>";

            $a = base_convert(32, 10, 7);
            echo "base_convert(32, 10, 7) = $a <br>";
            echo "<hr>";
            
            $b = ceil(5.3);
            echo "ceil(5.3) = $b";
            echo "<hr>";
            
            $c = floor(5.7);
            echo "floor(5.7) = $c";
            echo "<hr>";
            
            $d = round(5.7, 0, 0);
            echo "round(5.7, 0, 0) = $d";
            echo "<hr>";
            
            $e = round(5.3, 0, 0);
            echo "round(5.3, 0, 0) = $d";
            echo "<hr>";
            
            $f = intdiv(5, 2);
            echo "intdiv(5, 2) = $f";
            echo "<hr>";
            
            echo "Divisão real de 5/2 = " . 5/2;
            echo "<hr>";
            
            $g = 144 ** (1/2); //raiz quadrada
            echo "A resposta é $g";
            echo "<hr>";
            
            $h = 64 ** (1/3); //raiz cubica
            echo "A resposta é $h";
            echo "<hr>";
        ?>
    </section>
 </body>
 </html>