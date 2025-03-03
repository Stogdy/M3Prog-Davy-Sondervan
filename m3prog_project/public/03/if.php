<?php

$opvoorraad = 0;
$aantalOpVoorraad = 0;
$opvoorraad= $aantalOpVoorraad > 0;
if($opvoorraad == true)
{
    echo "niet op voorraad";
}
if($aantalOpVoorraad == false)
{
    echo "wel op voorraad";
}
else
{
    echo "artikel is op voorraad";
}
?>
