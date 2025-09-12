<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $mini = 1_518;
    $salario = $_GET['n1'] ?? $mini;

    
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h1>Informw seu Salário</h1>
           <input type="number" name="n1" id="n1" value="<?=$salario?>" step="0.01">
           <p>Considerando o salario minimo de <strong> R$<?=number_format($mini, 2, ",", ".")?></strong></p>

           <input type="submit" value="Salario">
        </form>
    </main>

    <section>
        <?php 
    
        $salarioMinimo = intdiv($salario, $mini) ;
        $resto = $salario % $mini;

         $restoSala = number_format($resto, 2, ",", ".");
         $restoMin = number_format($salario, 2, ",", ".");
         

        echo "Quem recebe um salário de R$" . $restoMin . " ganha " .$salarioMinimo . "  salario minimo + R$ " . $restoSala ;
       
        
        ?>
    </section>
</body>
</html>