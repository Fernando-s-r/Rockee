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

     <?php 
       
        $meses = [
            "janeiro", "Fevereiro", "Março" , "Abril", "Maio" , "Junho",
            "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
        ];
          
        $mesAtual = $meses[date('n') - 1];

        echo "Estamos no mês de: $mesAtual"
     ?>

     </main>
</body>
</html>