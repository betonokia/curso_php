<?php

//Trabalhando com ID de Sessão

session_id('m1p6hk8u6mlgs2qs6p63f5japi'); //Recuperando uma Session_ID

require_once("config.php"); //Chamando o arquivo de config com o start da sessão

session_regenerate_id(); //Gerando uma nova Session_ID

echo session_id(); //Mostrando uma Session_ID

echo "<br>";

var_dump($_SESSION);

?>