<?php
/*function oppervlakte($straal,$hoogte){
    $opp = round($straal**2*pi(),2);
    $vol = ($opp * $hoogte)*1000;
    print "Het zwembad bevat $vol l water\n";
}*/

function volume($doorsnede1,$doorsnede2,$hoogte)
{
    $straal1=$doorsnede1/2;
    $straal2=$doorsnede2/2;
    $vol = round(1/3*pi()*$hoogte*($straal1**2+$straal1*$straal2+$straal2**2),2)*1000;

    print "Het zwembad bevat $vol l water\n";
}

volume(2,2,.6);
volume(6,4,6);
volume(6,8,12);