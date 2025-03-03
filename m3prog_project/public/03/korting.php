<?php

$totaalBesteld = 250;
$verzendKosten = 3.50;
$korting = 0.05;
$cadeautje=false;

$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendKosten);
if($totaalBesteld >= 100) + ($verzendKosten = 0);
echo "Totaal van de bestelde artikelen $totaalBesteld</br>";
echo "Totaal met verzendkosten wordt het $totaal</br>";

echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";

