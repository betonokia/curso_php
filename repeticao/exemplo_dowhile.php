<?php

//Usando o laço de repetição DO WHILE

$total = 100;
$desconto = 0.9;

do {

    $total *= $desconto;
}
    while ($total > 100);

echo "Valor com desconto = " . $total;

?>