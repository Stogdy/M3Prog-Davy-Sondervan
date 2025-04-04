<?php

$persoon = ['voornaam' => 'Luigi', 'achternaam' => 'Mario', 'leeftijd' => 19, "favoriet eten" => "Pasta bolognese"];

foreach($persoon as $key => $value)
{
    echo $key ." = ". $value ."<br>";
}

echo "<tr><td>$key</td><td>$value</td></tr>";

?>