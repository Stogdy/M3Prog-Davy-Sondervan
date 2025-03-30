<?php

$voorspelling = [
    "ma" => 23,
    "di" => 24,
    "wo" => 25,
    "do" => 26,
    "vr" => 27,
    "za" => 28,
    "zo" => 29
];

$dag = $_GET['dag'];

echo "<h1>De voorspelling voor <b>$dag</b> is $voorspelling[$dag]C</h1>";


?>