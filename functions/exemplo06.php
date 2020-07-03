<?php

//Trabalhando com Funções

$pessoa = array (
    'nome'=> 'Humberto',
    'idade'=>38
);

foreach ($pessoa as &$value){

    if (gettype($value) === 'integer') $value +=10;

    echo $value. '<br>';

}

print_r($pessoa);
echo "<br>";
var_dump($pessoa);

?>