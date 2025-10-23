<?php
$a = 0;
$b = 1;
for ($i = 0; $i < 10; $i++) {
    echo "$a ";
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}
?>