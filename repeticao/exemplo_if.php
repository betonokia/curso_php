<?php

//Usando o comando IF

$suaIdade = 30;
$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeIdoso = 65;

if ($suaIdade < $idadeCrianca) {

    echo "Criança";

} elseif ($suaIdade < $idadeAdulto) {

    echo "Adolescente";

} else if ($suaIdade < $idadeIdoso) {

    echo "Adulto";

} else {

    echo "Idoso";

}

echo "<br>";

echo ($suaIdade < $idadeAdulto)?"Menor de Idade":"Maior de Idade"; //Ternário

?>