<?php
$precos = [10.50, 50, 35, 58, 65, 99.9, 105, 305, 2.50];
$soma = 0;
$j = 0;
$media = 0;
for ($i = 0; $i < count($precos); $i++)
{
    $j = ($precos[$i]);

    $soma = $soma + $j;
}
$media = ($soma / count($precos));

echo "A média de todos os preços é de ".round($media,2);

?>