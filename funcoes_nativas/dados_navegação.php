<?php

echo "<h2>Informações de Acesso</h2>";

$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
$servidor = gethostname();
$versao_php = phpversion();

echo "IP do usuário: " . $ip . "<br>";
echo "Navegador: " . $navegador . "<br>";
echo "Nome do servidor: " . $servidor . "<br>";
echo "Versão do PHP: " . $versao_php . "<br>";
?>