<?php

//Usando o laço de repetição FOR

for ($i = 0; $i < 10; $i++) { //Incrementande de 1 em 1

    echo $i . "<br>";
}

for ($i = 0; $i <= 1000; $i+=5) { //Incrementando de 5 em 5

    if ($i > 200 && $i < 800) continue;

    if ($i === 900) break;

    echo $i . "<br>";
}

?>