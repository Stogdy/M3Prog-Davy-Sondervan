<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Weersvoorspelling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$weersvoorspelling = [
    "maandag" => 14,
    "dinsdag" => 16,
    "woensdag" => 18,
    "donderdag" => 20,
    "vrijdag" => 19,
    "zaterdag" => 17,
    "zondag" => 15
];


echo "<pre>";
print_r($weersvoorspelling);
echo "</pre>";
?>

<h2>Weersvoorspelling komende week</h2>

<table>
    <?php foreach ($weersvoorspelling as $dag => $temp): ?>
        <tr>
            <td><?= ucfirst($dag); ?></td>
            <td><span class="temperatuur"><?= $temp; ?>°C</span></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php

$vandaag = "maandag";
?>

<p>Vandaag is het <?= $vandaag; ?> en het wordt <?= $weersvoorspelling[$vandaag]; ?> graden.</p>
<p>Dinsdag wordt het <?= $weersvoorspelling['dinsdag']; ?> graden.</p>
<p>Woensdag wordt het <?= $weersvoorspelling['woensdag']; ?> graden.</p>
<p>Vrijdag wordt het <?= $weersvoorspelling['vrijdag']; ?> graden.</p>
<p>Zondag wordt het <?= $weersvoorspelling['zondag']; ?> graden.</p>

</body>
</html>