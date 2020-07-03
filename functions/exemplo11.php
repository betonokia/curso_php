<?php

//Trabalhando com Funções Anônimas

function teste($callback){

    //Processo lento
    $callback();

}

teste(function(){

    echo "Processo concluído!";

});

?>