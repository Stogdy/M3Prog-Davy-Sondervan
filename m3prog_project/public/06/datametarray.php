<?php

header ("Content-Type: application/json");

$mario = ["name"=>"mario","gemiddeldeCijfer"=> 7.5];
$wario = ["name"=>"wario", "gemiddeldeCijfer"=> 4.5];


$dataObject = ["studenten"=> [$mario,$wario]];

echo $dataObject

