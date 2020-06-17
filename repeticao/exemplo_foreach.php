<?php

//Usando o laço de repetição FOREACH

$meses = array(
    "Janeiro", "Fevereiro", "Março", 
    "Abril", "Maio", "Junho", 
    "Julho", "Agosto", "Setembro", 
    "Outubro", "Novembro", "Dezembro");

foreach ($meses as $index => $mes) {    

    echo "O index é: " . $index . "<br>";
    echo "O mês atual é: " . $mes . "<br><br>";

}
?>