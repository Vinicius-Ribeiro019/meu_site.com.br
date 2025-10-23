<?php
$a = 1;
$b = -3;
$c = 2;
$delta = $b * $b - 4 * $a * $c;
if ($delta < 0) {
    echo "A equação não possui raízes reais.";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    echo "A equação possui uma raiz real: x = $x";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "A equação possui duas raízes reais: x1 = $x1 e x2 = $x2";
}