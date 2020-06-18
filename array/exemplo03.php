<?php

//Outro exemplo de array bi dimensional

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Humberto',
    'idade' => '38'
));

array_push($pessoas, array(
    'nome' => 'Vanessa',
    'idade' => '39'
));

print_r ($pessoas);
echo "<br>";
print_r ($pessoas[0]);
echo "<br>";
print_r ($pessoas[0]['nome']);

?>