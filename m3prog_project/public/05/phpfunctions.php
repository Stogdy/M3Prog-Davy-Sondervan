<?php

$hoeLangIsDitWoord = strlen ("scrabbleWoord");


$woordLengte = strlen ("scrabbleWoord");
print ($woordLengte);

//vraag 1 wat is het type het argument van strlen?
//string

//vraag 2 wat is het type van wat strlen returned?
//integer

//vraag 3 het getal wat strlen returned, wat is dat?
//13

$heelErgLangWoord = strlen ("pneumonoultramicroscopicsilicovolcanoconiosis");

$woordLengte = strlen ("pneumonoultramicroscopicsilicovolcanoconiosis");
print ($woordLengte);


?>
<br>

<?php 
$tweeMacht2 = pow(2,2);
$tweeMacht2 = pow(2,10);
print $tweeMacht2;

$derdeMachtVan3 = pow(3,4);
print ("<br>");
print $derdeMachtVan3; 

$naam = "Wario";

print ("<br>");

$naamGroot = strtoupper($naam);


print $naamGroot . "\n";

print ("<br>");

$naamKlein = strtolower($naamGroot);

print $naamKlein . "\n";
?>