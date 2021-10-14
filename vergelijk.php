<?php
function VergelijkMet100($getal)
{
    if ($getal > 100) //opgelet voor assignment!
    {
        return "groter dan";
    } elseif ($getal < 100) {
        return "kleiner dan";
    } else {
        return "gelijk aan";
    }
}

$a = 23; //toewijzing of assignment
print "$a is " . VergelijkMet100($a) . " 100\n";

$a = 544; //hertoewijzing of reassignment
print "$a is " . VergelijkMet100($a) . " 100\n";

$a = 100;
print "$a is " . VergelijkMet100($a) . " 100\n";