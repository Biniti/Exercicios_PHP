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
foreach ($turma as list(&$valor,&$valor2,&$valor3)) {
    $total = ($valor + $valor2 + $valor3)/3;
    $i = $i+1;
    echo "A média do $i# aluno é ". round($total,2) . "<br>";
}
?>