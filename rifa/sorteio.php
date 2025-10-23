<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <label>Escreva oque você deseja sortear:</label><br><br>
        <input type="text" name="item" id="item">
    <form action="" method="post"><br>
        <button type="submit">Sortear Número da Rifa</button>
    </form>
   <?php
     
     $numero_sorteado = rand(1, 1000);
     echo "O número sorteado foi: " . $numero_sorteado;
 ?>
 <br><br>   
    <?php 
  
    
    date_default_timezone_set('America/Sao_Paulo') . "<br>";
    echo "Data e hora atual: " . date('d/m/Y H:i:s') . "<br>";
    

?>
    
        
</body>
</html>
