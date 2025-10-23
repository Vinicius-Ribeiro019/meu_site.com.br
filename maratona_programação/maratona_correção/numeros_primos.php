<?php
for($n=2; $n<=50; $n++) {
    $Primo = true;
    for($i=2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $Primo = false;
            break;
        }
    }
    if ($ehPrimo) {
        echo "$n <br>";
    }
}
?>
