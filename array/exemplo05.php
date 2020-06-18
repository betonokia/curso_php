<?php

//Exemplo de importação de um JASON

$jason = '[{"nome":"Humberto","idade":"38"},{"nome":"Vanessa","idade":"39"}]';

$dados = json_decode($jason, true);

var_dump($dados);

?>