<?php 
$str = "programacao";
$vogais = preg_match_all('/[aeiou]/i', $str,);
echo "A string '$str' contém $vogais vogais.";
?>