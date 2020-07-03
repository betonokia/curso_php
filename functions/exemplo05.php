<?php

//Trabalhando com Funções

$a = 10;

function trocaValor($b){ //Passagem de parâmetro por valor

    $b += 50;

    return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";

function trocaValorRef(&$b){ //Passagem de parâmetros por referência

    $b += 50;

    return $b;

}

echo trocaValorRef($a);
echo "<br>";
echo $a;

?>