<?php

$json = '{"naam":"God of war","prijs":39.99,"voorraad":150}';


$game = json_decode($json);

echo "<h2>Game info</h2>";
echo "<p>Naam: " . $game->naam . "</p>";


echo "<p>Prijs: €" . $game->prijs . "</p>";
echo "<p>Voorraad: " . $game->voorraad . "</p>";


$game->beschrijving = "Een episch avontuur vol actie en mythologie.";
echo "<p>Beschrijving: " . $game->beschrijving . "</p>";


$game->voorraad = 20;


$game->prijs = 29.99;


$game->jaar = 2018;


$jsonNieuweVersie = json_encode($game, JSON_PRETTY_PRINT);

echo "<h2>Nieuwe JSON-versie:</h2>";
echo "<pre>$jsonNieuweVersie</pre>";
?>
