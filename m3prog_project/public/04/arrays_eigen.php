<?php
$bands = ["DragonPower, PowerDragon, PogonDrawer"];
print_r($bands);
echo "</br></br>";
var_dump($bands); 

echo count($bands). "<br><br>";
$bands[] = "een tweede band";
array_push($bands, "Dishwashers");
print_r($bands);
echo "<br><br>";
echo implode(' >> ', $bands);
echo "<br><br>";

echo $bands[0]; 
echo "<br>";
echo $bands[1]; 
echo "<br>";
echo $bands[2]; 
echo "<br>";
echo $bands[4]; 
echo "<br>";
?>