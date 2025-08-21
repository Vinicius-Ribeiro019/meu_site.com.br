<?php



    //GET    
$valor1 =  $_GET['valor1'];    
$valor2 = $_GET['valor2'];    
$sinal  = $_GET['sinal'];    

    $resultado = $valor1.$sinal.$valor2. "=";
    echo $resultado;

    // o sinal de mais tem o papel de preencher espaços da URL, para testarmos 
    //teremos que colocar em hexadecimal : sinal=%2B
        if($sinal == "+"){
            echo  .$valor1 + $valor2;
            }    
        if($sinal == "-"){
            echo  .$valor1 - $valor2;
            }    
        if($sinal == "*"){
            echo  .$valor1 * $valor2;
            }    
        if($sinal == "/"){
            echo  .$valor1 / $valor2;
            }    