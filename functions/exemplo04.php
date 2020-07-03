<?php

//Trabalhando com Funções

function ola(){

    $argumentos = func_get_args();

    return $argumentos;

}

ola("Bom dia");

var_dump (ola("Bom dia", 10, 15.3, true));

?>