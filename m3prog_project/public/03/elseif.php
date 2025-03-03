<html>
<body>

<?php

$stoplichtKleurR = 'R';
$stoplichtKleurO = 'O';
$stoplichtKleurG = 'G';

$stoplichtKleur = $stoplichtKleurR; 

if ($stoplichtKleur == $stoplichtKleurG) {
    echo "<button style='background-color:#00FF00;height:25px;width:25px;'>🟢</button>"; // Groen
} elseif ($stoplichtKleur == $stoplichtKleurO) {
    echo "<button style='background-color:#FFA500;height:25px;width:25px;'>🟠</button>"; // Oranje
} else {
    echo "<button style='background-color:#FF0000;height:25px;width:25px;'>🔴</button>"; // Rood
}

?>

</body>
</html>
