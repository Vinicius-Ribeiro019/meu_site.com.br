<?php
    //ESta é uma função
    //inicio da função saudação 
    function saudacao($nome) {
        return "Olá, $nome!<br>";
    }
    //fim da função saudação
    
    echo saudacao("Vinicius");
    //Definição da função
    function nomeDaFuncao($parametro1,$parametro2) {
        //codigo que sera executado
        $resultado = $parametro1 + $parametro2;
        return $resultado; //retorna um valor
    }
    //chamando a função
$soma = nomeDaFuncao(5, 10);
echo "O resultado é: " . $soma;


?>