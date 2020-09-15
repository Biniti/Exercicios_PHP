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
    $j = 0;
    # J é um contador, o J serve pra contar a quantidade de alunos que passaram por média
foreach ($turma as $aluno =>list(&$valor,&$valor2,&$valor3)) {
    $total = ($valor + $valor2 + $valor3)/3;

    if ($total > 6)
    {
        echo"O aluno $aluno  passou com média ". round($total,2). "<br>"; 
        
        $j++;
    }
    else 
    {
        echo "O  aluno  $aluno reprovou com média " .round($total,2) ."<br>"; 
    }
}
echo "<br>"."A quantidade alunos que passou por média foi $j";
?>