<?php
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";


$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";


$kelvin = $celsius + 273.15;
echo "{$celsius} graden Celsius = {$kelvin} Kelvin. <br/>";


$celsius = $kelvin - 273.15;
echo "{$kelvin} Kelvin = {$celsius} graden Celsius. <br/>";
?>
