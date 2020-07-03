<?php

//Trabalhando com a função DATE

echo date("d/m/Y"); //Formato dd/mm/aaaa
echo "<br>";
echo date("d/m/Y H:i:s"); //Formato dd/mm/aaaa Hora:minutos:segundos
echo "<br>";
echo date("d/m/Y H:i:s", 1593804600); //Fixando o Timestamp
echo "<br>";
echo time(); // Pegando o Timestamp

?>