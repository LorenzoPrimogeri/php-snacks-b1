<?php

/*
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
$array = [];
$i = 0;
while (count($array) <= 14) {
    $numero = rand(1, 25);
    if (!in_array($numero, $array)) {
        $array[] = $numero;
    }
    $i++;
}
echo "<pre>";
var_dump($array);
echo "<pre>";
echo ("i ciclo ha effettuato un totale di: " . $i . " giri.");
?>

<h1>Snack_3</h1>