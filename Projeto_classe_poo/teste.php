<?php

require_once "Usuario.php";
require_once "Professor.php";
require_once "Aluno.php";

$professor1 = new Professor("Carlos Silva", "calos@escola.com", "Matematica");
$professor2 = new Professor("Crespo", "crespo@escola.com", "Educação Física");

$aluno1 = new Aluno("João Santos", "joao@aluno.com", "2025A001");
$aluno2 = new Aluno("Calleri", "calleri@aluno.com", "18092025");

echo "<h2>Professores</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor1->darAula() . "<br><br>";

echo $professor2->exibirInfo() . "<br>";
echo $professor2->darAula() . "<br><br>";

echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno1->estudar() . "<br><br>";

echo $aluno2->exibirInfo() . "<br>";
echo $aluno2->estudar() . "<br><br>";



































?>