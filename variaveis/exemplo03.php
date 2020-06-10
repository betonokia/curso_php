<?php

//Declaração de variáveis no PHP

//Variáveis do tipo Básico
$nome = "Systray Informática"; // Var do tipo String
echo $nome;
echo "<br/>"; // Quebra de linha
$site = 'www.systrayinformatica.com.br'; // Var do tipo String
echo $site;
echo "<br/>"; // Quebra de linha
$ano = 2020; // Var do tipo numérica
echo $ano;
echo "<br/>"; // Quebra de linha
$valor = 5500.99; // Var do tipo float
echo $valor;
echo "<br/>"; // Quebra de linha
$bloqueado = false; // Var do tipo Boleana
echo "<br/>"; // Quebra de linha

//Variáveis do tipo Compostos
$frutas = array("Laranja", "Maçã", "Banana", "Melancia", "Abacate"); // Var do tipo Array
echo $frutas[4];
echo "<br/>"; // Quebra de linha
$dtNascimento = new DateTime(); // Var do tipo OO (Orientação Objeto)
var_dump($dtNascimento);
echo "<br/>"; // Quebra de linha

//Variáveis do tipo Especial
$arquivo = fopen("exemplo03.php", "r"); // Var do tipo resource
var_dump($arquivo);
$nulo = NULL; // Var do tipo nulo

?>