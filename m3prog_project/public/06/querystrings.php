<?php

$stad = ($_GET['Stad'] ?? 'Amsterdam');
$temperatuur = ($_GET['temperatuur'] ?? '34');
$land = ($_GET['land'] ?? 'Nederland');

echo "$stad $temperatuur $land<br>";

?>
