<?php
/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
*/
$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum sit sapiente eligendi, sed qui perspiciatis ab labore porro id, veniam iure, maiores facilis autem saepe soluta similique iusto at deserunt.";
$arrayParagrafi = explode(",", $paragrafo);
for ($i = 0; $i < count($arrayParagrafi); $i++) {
    $element = $arrayParagrafi[$i];
    echo ("<p>");
    echo ($element);
    echo ("<p>");
}
?>

<h1>snack_4</h1>