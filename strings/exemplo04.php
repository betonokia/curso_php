<?php

//Trabalhando com Strings

$nome = "humberto alves de almeida";
$palavra = "alves";
$q = strpos($nome, $palavra); //Procura a posição de uma string em uma frase
$texto = substr($nome, 0, $q); //Pega parte de um texto do começo até onde uma palavra, ignorando a palavra


var_dump($q);
echo "<br>";
var_dump($texto);

$texto2 = substr($nome, $q + strlen($palavra), strlen($nome)); //Pega parte final de uma frase, de uma palavra até o final da frase, ignorando a palavra
echo "<br>";

var_dump($texto2);

?>