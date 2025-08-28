
<?php
function parOuImpar($num) {
    if ($num % 2 == 0) {
        return "Par";
    } else {
        return "Impar";
    }
}
   $num = $_POST['num'];

   $resultado = parOuImpar($num);
        echo"<h2>O seu número é $resultado";
?>