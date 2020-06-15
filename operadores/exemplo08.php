<?php

//Ordens de execução dos Operadores

$resultado = 10 + 3 / 2;
$resultado1 = (10 + 3) / 2;
$resultado2 = 10 + 3 / 2 > 5 && 10 + 5 < 3; //Operador AND
$resultado3 = 10 + 3 / 2 > 5 || 10 + 5 < 3; //Operador OR

echo $resultado;
echo "<br>";
echo $resultado1;
echo "<br>";
var_dump($resultado2);
echo "<br>";
var_dump($resultado3);

?>