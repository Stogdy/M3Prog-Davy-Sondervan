<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Verbruik huishoudelijke apparaten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Verbruik van huishoudelijke apparaten</h1>

<?php
// Associatieve array met verbruik per apparaat in kWh
$verbruik = [
    "Koelkast" => 150,
    "Wasmachine" => 200,
    "Vaatwasser" => 180,
    "Oven" => 250,
    "Televisie" => 100
];

// Foreach loop voor weergave
foreach ($verbruik as $apparaat => $waarde) {
    echo "<div class='apparaat'>";
    echo "<h2>$apparaat</h2>";
    echo "<p>Verbruik: <span class='kwh'>{$waarde} kWh</span></p>";
    echo "</div>";
}

// Opdracht 2: totaal berekenen
$totaal = 0;

foreach ($verbruik as $apparaat => $waarde) {
    $totaal += $waarde;
}

echo "<h3>Totaal verbruik: <span class='totaal'>{$totaal} kWh</span></h3>";
?>

</body>
</html>
