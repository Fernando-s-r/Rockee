<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="estyle.css">
</head>
<body>

      <main>
        <h1>Gerando um número aleatorio</h1>
          <?php 
              
         
          
            //ex02////////////////////////////////////
          
            $min = 0;
            $max = 100;
          
            $numeroGerado = mt_rand($min, $max);
          
            echo "<p>Gerando um número aleatorio entre $min e $max</p>";
            echo "<p>O valor gerado foi $numeroGerado</p>"


             ?>
          
          <button onclick="javascript:location.reload()">
            &#x1F504; Gerar outro
        </button>
      </main>
</body>
</html>