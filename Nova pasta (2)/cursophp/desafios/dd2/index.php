<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="" method="get">
             <h1> Calcular acerto F</h1>
            <input type="number" name="n1" id="n1" step="0.01">
            <input type="submit" value="calcula">
        </form>
    </main>

    <main>
        <form action="" method="get">
             <h1> Calcular acerto M</h1>
            <input type="number" name="n2" id="n2" step="0.01">
            <input type="submit" value="calcula">
        </form>
    </main>
  
    <section>
        <?php 
          $acertoEva = $_GET['n1'] ?? 1;
          $eva3 = '2';
          
          $final = $acertoEva - 100 ;
           $test = $final * $eva3;

          echo "<p><strong>Acerta (F) evasão  $test </strong></p>"
         
        
        ?>


    </section>
    <section>
        <?php 
          $acertoEva = $_GET['n2'] ?? 1;
          $eva3 = '2';

          $final = $acertoEva * $eva3;
           

          echo "<p><strong>Acerta (M ) evasão $final </strong></p>"
         
        
        ?>


    </section>
</body>
</html>