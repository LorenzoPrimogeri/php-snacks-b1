<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
function calcolaMedia($nums)
{
    $qt = count($nums);
    $res = 0;
    for ($i = 0; $i < $qt; $i++) {
        $res += $nums[$i];
    }
    return $res / $qt;
}
$arrayAlunni = array(
    array("Lorenzo Primogeri", [123, 512, 6, 7]),
    array("Giovanni Primogeri", [6, 512, 7, 8]),
    array("Saab astiano", [2, 3, 432, 5]),
    array("Land Rover", [5, 6, 7445, 8])
);

for ($i = 0; $i < count($arrayAlunni); $i++) {
    echo ("nome: " . $arrayAlunni[$i][0]);
    $media = 0;
    for ($j = 0; $j < count($arrayAlunni[$i][1]); $j++) {
        echo ("<p>");
        $media = calcolaMedia($arrayAlunni[$i][1]);
        echo ("<p>");
    }
    echo ("<p>media: " . $media . "<p>");
}
?>

<h1>Snack_Bonus</h1>