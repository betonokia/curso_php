<?php

//Trabalhando com a função DATETIME

$dt = new DATETIME();

$periodo = new DATEINTERVAL("P15D");

echo $dt -> format("d/m/Y H:i:s");
echo "<br>";

$dt -> add($periodo);

echo $dt -> format("d/m/Y H:i:s");

?>