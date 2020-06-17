<?php

//Include e Require

//include "exemplo01.php"; // Chamando a função de somar criada no arquivo exemplo01.php
//require "exemplo01.php"; // Chamando a função de somar criada no arquivo exemplo01.php

require_once "exemplo01.php"; // Chamando a função de somar criada no arquivo exemplo01.php
require_once "exemplo01.php"; // Chamando a função de somar criada no arquivo exemplo01.php

$resultado = somar(10, 20);

echo "Soma = " . $resultado;

?>