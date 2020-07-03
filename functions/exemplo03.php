<?php

//Trabalhando com Funções

function ola($texto = "mundo", $periodo = "Bom dia"){

    return "Olá $texto! $periodo!<br>";

}

echo ola();
echo ola("", "Boa noite");
echo ola("Humberto", "Boa Tarde");
echo ola("Vanessa", "");

?>