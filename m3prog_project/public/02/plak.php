<?php
$standaardString = "hello world<br>";
echo "$standaardString"; 

$extraString = "extra world<br>";
echo "$extraString";

$voornaamString = "Mario ";


$achternaamString = "Wario";

$vollenaamString = "$achternaamString $voornaamString";
echo "$vollenaamString";


$naamString = "Yoshi";



$ondertekentDoor = "directeur bowser";

$enemyString = "Koopa Troopa's";

$emailTekst = "<br>Beste $naamString<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemyString vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>";

echo "$emailTekst"

?>