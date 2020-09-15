<?php 
$precos = [10.50, 50, 35, 58, 65, 99.9, 105, 305, 2.50];
$maior = 0;
$verificar = 0;
for ($i = 0; $i < count($precos); $i++)
{
    for ($j = 0; $j < count($precos) ; $j++)
    {
        $verificar = ($precos[$j]);
        if ($verificar > $maior)
        {
            $maior = $verificar;
        }
    }
}
echo "O maior preço dentro da array precos é $maior"

?>