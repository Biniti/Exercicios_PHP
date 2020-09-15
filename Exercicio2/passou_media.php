<?php

$turma = [
    "A" => [10,8,6],
    "B" => [5,3,8],
    "C" => [10,10,10],
    "D" => [8,6,3],
    "E" => [9,9,9],
    "F" => [2,3,5]
    ];
    $total = 0;
    $i = 0;
    $j = 0;
    # J e i são contadores, o J serve pra contar a quantidade de alunos que passaram por média
    # e o i serve pra separar os alunos entre, primeiro, segundo e etc
    # assim como primeiro se refere ao aluno A, segundo ao aluno B e etc
foreach ($turma as list(&$valor,&$valor2,&$valor3)) {
    $total = ($valor + $valor2 + $valor3)/3;
    $i += 1;
    if ($total > 6)
    {
        echo"O $i# aluno passou com média ". round($total,2). "<br>"; 
        
        $j++;
    }
    else 
    {
        echo "O $i# aluno reprovou com média " .round($total,2) ."<br>"; 
    }
}
echo "<br>"."A quantidade alunos que passou por média foi $j";
?>