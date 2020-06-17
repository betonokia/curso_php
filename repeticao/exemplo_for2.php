<?php

//Usando o laço de repetição FOR

echo "<select>";

for ($i = date("Y"); $i > date("Y")-100; $i--){

    echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";

?>