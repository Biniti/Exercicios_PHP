<?php

$precos = [10.50, 50, 35, 58, 65, 99.9, 105, 305, 2.50];
$menor = 1000;
$verificar = 0;
$indice = 0;
for ($i = 0; $i < count($precos); $i++)
{
    for ($j = 0; $j < count($precos) ; $j++)
    {
        $verificar = ($precos[$j]);
        if ($verificar < $menor)
        {
            $menor = $verificar;
            $indice = $j ;
        }
    }
}

echo "O menor preço do vetor é $menor e o seu indice é $indice";
?>