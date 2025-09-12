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
        <h1>Conversor de Moedas V1.0</h1>
          <?php 
              
           


            //ex03/////////////////////////////////////

           $cotacaoDolar = 5.42;

           $valorReis =   $_GET["valor"] ?? 0;

           $valorDolares = $valorReis / $cotacaoDolar;
 
          // echo "Seu R$" . number_format($valorReis, 2, ",", ".")  . "equivalem a US$" . number_format($valorDolares, 2, ",", ".") ;

          // Biblioteca intl (Internallization PHP)

         $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

          echo "<p>Seu" . numfmt_format_currency($padrao, $valorReis, "BRL") . "equivalem a <strong>" . numfmt_format_currency($padrao, $valorDolares, "USD" )  .  "</strong>" . "</p>";
      
            echo " cotação fixa e de  $cotacaoDolar <br>";
           

            
          ?>
          
          <button onclick="javascript:history.go(-1)">Voltar</button>
      </main>
</body>
</html>