<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estyle.css">
</head>
<body>
    <?php 
    $anoNasceu = $_GET['n1'] ?? 1997;
    $anoAtual = date('Y');
    ?>
    <main>
        <form action="" method="get">

        <label for="ano"> Em que ano voce nasceu ?</label>
        <input type="number" name="n1" id="n1" min="1900" max="<?=$anoAtual?>" required value="<?=$anoNasceu?>">

        <p>Quer daber sua idade em que ano? (atualmente estamos em <strong><?=$anoAtual?></strong>)</p>

        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <?php 
         $atual = $anoAtual - $anoNasceu ;

         echo "Quem nasceu em $anoNasceu vai ter<strong> $atual anos</strong> em $anoAtual"
        
        
        ?>
    </section>
</body>
</html>