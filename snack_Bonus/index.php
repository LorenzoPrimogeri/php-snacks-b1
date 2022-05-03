<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
$arrayAlunni = [
    "nome" => "lorenzo",
    "cognnome" => "primogeri",
    "voti" => [1, 10, 5, 4, 32]
];
for ($i = 0; $i < $arrayAlunni; $i++) {
    echo ("nome:" . $arrayAlunni["nome"]);
    echo ("cognnome:" . $arrayAlunni["cognnome"]);
    for ($j = 0; $j < $arrayAlunni["voti"]; $j++) {
        echo ("sono al interno dei voti");
    }
}



?>


<h1>Snack_5</h1>