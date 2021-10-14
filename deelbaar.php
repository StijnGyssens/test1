<?php
function DeelbaarDoor($getal, $deler)
{
    if ($getal % $deler === 0) {
        return true;
    } else {
        return false;
    }
}

for ($i = 0; $i < 20; $i++) {
    $getal = random_int(100, 999);
    if (DeelbaarDoor($getal, 7)) {
        print"$getal is deelbaar door 7\n";
    }
    {
        print "$getal\n";
    }
}