<form>

    <input type="text" name="nome">
    <input type="date" name="dataNasc">
    <input type="submit" value="Enviar">

</form>

<?php

//Usando o laço de repetição FOREACH

if (isset($_GET)) {
    foreach ($_GET as $key => $value){

        echo "O nome do campo é: " . $key . "<br>";

        echo "O valor do campo é: " . $value;

        echo "<hr>";

    }
}

?>