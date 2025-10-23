<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Digite um numero</label>
            <input type="text" name="numero">
        <label for="potencia">Digite a potência a ser elevada</label>
            <input type="text" name="potencia">
        <input type="submit" value="Calcular">
</body>
</html>





<?php
    $numero = $_POST['numero'] ?? '';
    $potencia = $_POST['potencia'] ?? '';
    echo "Potência: "   .pow($numero, $potencia);

?>

