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
   $num = $_GET["n1"] ?? 1;
?>

<main>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <h1>Raiz Q</h1>
           <input type="number" name="n1" value="<?=$num?>" id="n1">
           <input type="submit" value="Calcular Raizes">

   </form>

</main>
<strong></strong>

<section>
    <?php 
    

    //$rq = sqrt($num);
    $rq = $num ** (1/2);
    $rc = $num ** (1/3);

    $FormtRq = number_format($rq, 2, ",", ".");
    $FormtRc = number_format($rc, 2, ",", ".");

     echo "<p>Analisando o <strong>$num, temos:</p>";

    echo "<ul><li><p>A sua raiz quadrada é <strong> $FormtRq </strong></p></li></ul>" ;
    echo "<ul><li><p>A sua raiz cubica é <strong>$FormtRc</strong></p></li></ul>";
    
    ?>
</section>
    
</body>
</html>