<?php
 
    require "funcoes.php"
    $a = $_POST['a']
    $b = $_POST['b']
    $c = $_POST['c']

if ($a ==0) {
    echo "Não é uma equação do segundo grau";
}

$delta = delta($a,$b,$c);

if($delta < 0) {
    $x1 = x1 ($a,$b,$delta);
    $x1 = number_format ($x1,2,',','.');
    $x2 = x2 ($a,$b,$delta);
    $x2f = number_format($x2,2,',','.');

    echo "Os valores digitados foram $a, $b e $c, e as raizes são  $x1f e $x2f."

    function media ($n1, $n2, $n3, $n4, $n5) {
        return ($n1 + $n2 + $n3 + $n4 + $n5 / 5);
    }
    function soma ($n1, $n2, $n3, $n4, $n5) {
        return ($n1 + $n2 + $n3 + $n4 + $n5);
    }
    function delta ($a, $b, $c,) {
        $delta = ($b **2 - 4 *$a *$c);
        return $delta
    }
    function x1 ($a, $b, $delta) {
        return (-$b + $delta**0,5)/(2*$a);

    function x2 ($a, $b, $delta) {
        return (-$b - $delta**0,5)/(2*$a);

    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>