<?php

//Trabalhando com Strings

$nome = "humberto alves de almeida";

$nome = strtoupper($nome); //Convertendo em maiúsculo
echo $nome;
echo "<br>";

$nome = strtolower($nome); //Convertendo em minúsculo
echo $nome;
echo "<br>";

echo ucfirst($nome); //Convertendo a primeira letra em maiúsculo
echo "<br>";

echo ucwords($nome); //Convertendo a primeira letra de cada palavra em maiúsculo
echo "<br>";

?>