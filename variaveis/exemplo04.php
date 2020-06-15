<?php

//Arrays Super Globais do PHP

$numero = (int)$_GET["a"];

var_dump($numero);

$nome = $_GET["b"];

var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //Pegar o IP do usuário

echo $ip;

$nomePagina = $_SERVER["SCRIPT_NAME"]; //Pegar a página que está sendo acessada

echo $nomePagina;
//Forma d usar "URL?Variável=Conteúdo", "http://localhost/curso_php/variaveis/exemplo04.php?a=1623&b=Nome" 

?>