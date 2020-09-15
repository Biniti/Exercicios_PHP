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
    $soma_turma = 0;
    $media_turma = 0;
foreach ($turma as list(&$valor,&$valor2,&$valor3)) {
    $total = ($valor + $valor2 + $valor3)/3;
    $soma_turma += $total;
}
$media_turma = $soma_turma/6;
echo "A media da turma é " . round($media_turma,2);
?>