<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
// $arrayAlunni = [
//     "nome" => "lorenzo",
//     "cognnome" => "primogeri",
//     "voti" => [1, 10, 5, 4, 32]
// ];
$arrayAlunni = array(
    array("Lorenzo Primogeri", [22, 18, 22, 18, 22, 18]),
    array("Paolo Botrugno", 15, 1322, 18, 22, 18, 22),
    array("Paolo carso", 5, 2, 22, 18, 22, 18, 22),
    array("Land Rover", 17, 15, 22, 18, 22, 18, 22)
);
for ($i = 0; $i < $arrayAlunni; $i++) {
    echo ("nome:" . $arrayAlunni[$i]);
    for ($j = 0; $j < $arrayAlunni["voti"]; $j++) {
        echo ("sono al intenrso");
    }
}



?>


<h1>Snack_5</h1>