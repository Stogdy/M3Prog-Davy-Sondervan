<?php

$persoon = [
    "voornaam" => "Sofie",
    "achternaam" => "Jansen",
    "leeftijd" => 23
];

$json = json_encode($persoon);

$object = json_decode($json);



echo "<pre>";
var_dump($object);
echo "</pre>";


echo "<p>Voornaam: " . $object->voornaam . "</p>";
echo "<p>Achternaam: " . $object->achternaam . "</p>";
echo "<p>Leeftijd: " . $object->leeftijd . "</p>";
?>
