<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
// function calcolaMedia($nums)
// {
//     $qt = count($nums);
//     $res = 0;
//     foreach ($nums as $n) {
//         $res += $n;
//     }
//     return $res / $qt;
// }
$arrayAlunni = array(
    array("Lorenzo Primogeri", [4, 5, 6, 7]),
    array("Giovanni Primogeri", [6, 5, 7, 8]),
    array("Saab astiano", [2, 3, 4, 5]),
    array("Land Rover", [5, 6, 7, 8])
);

for ($i = 0; $i < count($arrayAlunni); $i++) {
    var_dump($arrayAlunni[$i]);
    for ($j = 0; $j < count($arrayAlunni); $j++) {
        $element = $arrayAlunni[$i][$j];
        echo ($element);
    }
}




?>


<h1>Snack_5</h1>