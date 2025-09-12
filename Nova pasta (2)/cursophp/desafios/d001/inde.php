<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estyle.css">
    <style>
      .aa {
        background-color: blue;
        padding: 5px 5px;
        margin-top: 20px;
        display: block;
        text-align: center;
        color: white;
        font-weight: bold;
        border-radius: 10px;
      }
      .aa:hover {
        color: #000;
        background-color: blueviolet;
      }
    </style>
</head>
<body>

      <main>
        <h1>Resulta Final</h1>

          <?php 
              
             // ex01 //////////////////////////////

           $escolhaumNumero =  $_GET["numero"] ?? 0;
            $sucessor = $escolhaumNumero +1;
           $antecessor = $escolhaumNumero - 1;

            echo "numero escolhido é $escolhaumNumero";
            echo "<br><em>sucessor</em> é $sucessor";
            echo "<br><em>antecessor</em> é $antecessor <br>";
            
          
               
          ?>
          
          <button onclick="javascript:history.go(-1)">← Voltar</button>
      </main>
</body>
</html>