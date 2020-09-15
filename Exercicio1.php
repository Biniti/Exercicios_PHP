<?php
$precos = [10.50, 50, 35, 58, 65, 99.9, 105, 305, 2.50];
$soma = 0;
$i = 0;
$j = 0;#Acumulador
for ($i=0; $i<count($precos); $i++)
{
   $j = ($precos[$i]);
   $soma += $j;

}
 echo  " $soma ";




?>