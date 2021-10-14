<?php
/*function AantalTegels($lengte_kamer,$breedte_kamer,$tegel_x,$tegel_y){
    $opptegel=$tegel_x*$tegel_y;
    $oppkamer=$lengte_kamer*$breedte_kamer;
    $aantaltegels=ceil($oppkamer/$opptegel);
    print "Je moet $aantaltegels tegels van $tegel_x x $tegel_y meter kopen voor een kamer van $lengte_kamer op $breedte_kamer meter.\n";
}*/
function AantalTegels($lengte_kamer,$breedte_kamer,$tegel_x,$tegel_y){
    $tegels_lengte=ceil($lengte_kamer/$tegel_x);
    $tegels_breedte=ceil($breedte_kamer/$tegel_y);
    $aantaltegels=$tegels_lengte*$tegels_breedte;
    print "Je moet $aantaltegels tegels van $tegel_x x $tegel_y meter kopen voor een kamer van $lengte_kamer op $breedte_kamer meter.\n";
}

AantalTegels(7,5,.3,.3);
AantalTegels(7,5, 1,1);