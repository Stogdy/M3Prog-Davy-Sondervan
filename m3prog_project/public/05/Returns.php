<?php
function mijnFunction()
{
return 1;
}

$mijnFunctionResultaat = mijnFunction();
print($mijnFunctionResultaat);

echo "<br>";

function returnVariable()
{
        $result = rand();
        return $result;
}
print(returnVariable());
print("<br>");
function returnVariable2()
{
        $result = rand();
        return $result;
}
print(returnVariable2());
print("<br>");
function returnVariable3()
{
        $result = rand();
        return $result;
}
print(returnVariable3());