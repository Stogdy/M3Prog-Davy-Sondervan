<?php

class Artikel {
    public $titel;
    public $prijs;
    public $voorraad;

    
    public function __construct($titel, $prijs, $voorraad) {
        $this->titel = $titel;
        $this->prijs = $prijs;
        $this->voorraad = $voorraad;
    }
}


$game = new Artikel("Minecraft", 29.99, 100);


echo "<h2>Artikel info (object)</h2>";
echo "<p>Titel: " . $game->titel . "</p>";
echo "<p>Prijs: €" . $game->prijs . "</p>";
echo "<p>Voorraad: " . $game->voorraad . "</p>";


$json = json_encode($game);


echo "<h2>Artikel info (JSON)</h2>";
echo "<pre>$json</pre>";


?>
