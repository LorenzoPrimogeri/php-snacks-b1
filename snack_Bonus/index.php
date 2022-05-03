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
    echo ("nome: " . $arrayAlunni[$i][0]);
    for ($j = 0; $j < count($arrayAlunni[$j]); $j++) {
        echo ("<p>");
        var_dump($arrayAlunni[$j]);
        echo ("<p>");
    }
}




?>


<h1>Snack_Bonus</h1>