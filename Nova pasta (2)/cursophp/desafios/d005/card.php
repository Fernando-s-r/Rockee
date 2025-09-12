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
        <h1>Analisador de Número Real</h1>
        <?php 
          $num = $_POST["valor"] ?? 0;


          echo "<p>Analisando o numero <strong> " . number_format($num, 3, ",", ".") . " </strong> informado pelo usuário:</p>";
           
          $int = intval($num) ;
          $fra = $num - $int ;

          echo "<ul><li>parte inteira <strong> " . number_format($int, 0, ",", ".") . "</strong></li>" ;
          echo "<li><p>parte fracionada <strong>" .number_format($fra, 3, ",", "."). "</strong> </p></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>