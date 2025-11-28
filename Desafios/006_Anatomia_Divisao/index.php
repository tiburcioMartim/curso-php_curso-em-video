<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php //capturar variáveis | Lógica
        $dividendo = $_GET['dividendo']??0;
        $divisor = $_GET['divisor']??0;
        $resto = $dividendo % $divisor;
        $quociente = $dividendo / $divisor;
    ?>
    
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="id-dividendo" value="<?=$dividendo?>" step="any" required>  
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="id-divisor" value="<?=$divisor?>" step="any" required> 
            <input type="submit" value="Analisar">            
        </form>
    </main>

    <section >
        <h2>Estrutura da Divisão</h2>
        <div class="estrutura-da-divisao-container">
            <div class="grid-item">
                <div class="trace vertical right"></div>
                <?=$dividendo?>
            </div>
            
            <div class="grid-item">
                <?=$divisor?>
            </div>
            
            <div class="grid-item resto">
                <?=$resto?>
                <div class="trace vertical right"></div>
            </div>

            <div class="grid-item">
                <?=(int)$quociente?>
                <div class="trace horizontal top "></div>
            </div>
        </div>
    </section>
</body>

</html>