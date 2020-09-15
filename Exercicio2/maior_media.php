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
    $maior = 0;
    $i = 0;
    $aluno = 0;
foreach ($turma as list(&$valor,&$valor2,&$valor3)) {
    $total = ($valor + $valor2 + $valor3)/3;
    $i += 1;

    if ($total > $maior)
    {
        $maior = $total;
    }
    if ($total >= $maior )
    {
        $aluno = $i;
        switch ($aluno)
        {
            case 1:
                $aluno = "A";
            break;
            case 2:
                $aluno = "B";
            break;
            case 3:
                $aluno = "C";
            break;
            case 4:
                $aluno = "D";
            break;
            case 5:
                $aluno = "E";
            break;
            case 6:
                $aluno = "F";
            break;
    
        }
    }
}
echo "A maior média da turma foi $maior e pertence ao aluno $aluno";
?>