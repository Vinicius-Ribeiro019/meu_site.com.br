<?php

function saudacao($nome) {
    return "Bem vindo, $nome! Sua participação foi confirmada!";
}


function banco_dados($db){
    return "Seu banco, $db, foi conectado com sucesso";
}

function fiap($aluno1, $aluno2, $aluno3, $observacao){
    echo "<h3>Lista de alunos com observações: </h3>";
    echo "<ul>";
    echo "<li> $aluno1. </li>";
    echo "<li> $aluno2. </li>";
    echo "<li> $aluno3. </li>";
    echo "</ul>";
    echo "<li> $observacao. </li>";
}

 function mediaNota($nota) {
    if ($nota >= 7) {
        return "Aprovado";
    }
    
    if ($nota >= 5 && 7) {
        return "Recuperação";
    
    }  else {
        return "Reprovado";
    }

}
    $nota = $_POST['nota'];

    $resultado = mediaNota($nota);
        echo"<h2> Você foi $resultado";