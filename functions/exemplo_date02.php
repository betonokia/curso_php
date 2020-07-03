<?php

//1593816720

//Trabalhando com a função DATE e Timestamp

//$ts = strtotime("1981-06-23");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts);

echo "<br>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//echo ucwords(strftime("%A %B"));

echo ucwords(strftime ("%A" . "," ." %d %B %Y"));

?>