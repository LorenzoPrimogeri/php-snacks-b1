<?php

/*<?php?>
/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
$arraypartite = ["milan - chelsea 55 | 40", "Olimpia Milano - Cantù | 55-60", "Olimpia Milano - Cantù | 55-60", "milan - chelsea 55 | 40"]



?>

<h1>
    <?php
    for ($i = 0; $i < count($arraypartite); $i++) {
        $element = $arraypartite[$i];
        echo "<pre>";
        echo ($element);
        echo "<pre>";
    }
    ?>
</h1>