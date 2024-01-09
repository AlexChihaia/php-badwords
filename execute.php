<?php

$paragrafo = $_GET["paragrafo"];
$parola = $_GET["parola"];
echo "Paragrafo originale:<br>";
echo $paragrafo; echo "<br>Lunghezza: " . strlen($paragrafo) . " caratteri<br>";
$paragrafoCensurato = str_replace($parola, "***", $paragrafo);
echo "Paragrafo censurato:<br>";
echo $paragrafoCensurato;
echo "<br>Lunghezza: " . strlen($paragrafoCensurato) . " caratteri<br>"; 

 ?>
