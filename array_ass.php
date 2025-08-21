<?php

    $pessoa = ["nome" => "João", "idade" => 30];
    echo "Olá $pessoa[nome] você tem $pessoa[idade]";

?>
<p> Olá aqui é um HTML: </p>

<?php
    
    $aluno=["nome" => "Francisco", "idade" => 16, "nota" => 100];
        echo "Olá $aluno[nome] você tem  $aluno[idade] anos e sua nota é $aluno[nota]";
    
    $ano = ["idade" => 2025-$aluno["idade"]];
        echo " você nasceu no ano de 2009 ";

    $data = date('d/m/Y');
        echo " <p> Hoje é dia ". $data;

    $dia = date('d');
        echo " <p> Hoje é dia ". $dia . " dia nacional da Habitação"; 
    
    $horas = date('H:i:s');
        echo "<p> Agora são ". $horas;
?>