<?php

function convertCurrency()
{
    $euro = 100;
    $dollar = 1.36;
    $result = $euro * $dollar;
    echo "Euro: $euro, Dollar: $dollar, Result: ";
    return $result;
}

$result = convertCurrency();
print("€$result");
print("<br>");
function sendEmail()
{
    $to = "Mediacollege@ma.nl"; 
    $from = "Davy@gmail.com";
    $subject = "Dit is een Onderwerp";
    $message = "Hallo hoe gaat het ?";

    echo "$to <br> $from <br> $subject <br> $message";
}

sendEmail();


function generateRandomString($length)
{
$length = 10;
    echo " <br> Length: $length";
}

generateRandomString(10);

