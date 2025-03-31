<?php

class student
{
public $name;
public $gemiddeldeCijfer;
}

class dataObject
{
public $studenten;
}

$mario = new student();

$mario-›name="mario";

$mario-›gemiddeldeCijfer=8;

$dataObject = new dataObject();
$dataObject-›studenten = [$mario, $bowser, $peach,$wario];


echo $dataObject