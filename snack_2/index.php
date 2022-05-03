<?php
/*
Passare come parametri GET name, mail e age
verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

/* URL TEST 
index.php?name=lore&email=lorenzo@gmail.com&age=18
*/
$nome = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

if (strlen($nome) >= 3 && (strpos($email, "@") && strpos($email, ".")) && is_numeric($age)) {
    echo ("Accesso Riuscito");
} else {
    echo ("Accesso Negato");
}
?>

<h1>Snack_2</h1>