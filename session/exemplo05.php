<?php

//Trabalhando com ID de Sessão

require_once("config.php"); //Chamando o arquivo de config com o start da sessão

echo session_save_path(); //Mostrando uma Session_ID

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()){

    case PHP_SESSION_DISABLED:
    echo "A Sessão está desabilitada!";
    break;

    case PHP_SESSION_NONE:
    echo "A Sessão está habilitada, mas não iniciada!";
    break;

    case PHP_SESSION_ACTIVE:
    echo "A Sessão está ativa!";
    break;

}

?>