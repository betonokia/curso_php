<?php

//Exemplo de geração de um JASON

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Humberto',
    'idade' => '38'
));

array_push($pessoas, array(
    'nome' => 'Vanessa',
    'idade' => '39'
));

echo json_encode($pessoas);

?>