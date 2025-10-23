<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST">
        <label>Digite um número:</label>
        <input type="number" name="numero">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php
if (isset($_POST['n'])) {
    $n = $_POST['n'];
    echo "potencia (n²):" . pow($n, 2) . "<br>";
    echo "Raiz quadrada (√n):" . sqrt($n) . "<br>";
    echo "Valor absoluto (|n|):" . abs($n) . "<br>";
}
