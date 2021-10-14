<?php
$lijst=[14, 5, 8, 9, 13, 18, 16, 25 ];

function Gemiddelde($lijst){
    //return array_sum($lijst)/count($lijst);


    /*$tot=0;
    foreach ($lijst as $x){
        $tot+=$x;
    }
    return $tot/count($lijst);*/


    $tot=0;
    $length=0;
    foreach ($lijst as $x){
        $tot += $x;
        $length++;
    }
    return $tot / $length;
}


$G=Gemiddelde($lijst);
print $G;
