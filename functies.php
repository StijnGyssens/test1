<?php
function Print5Times ($tekst){  #$tekst is een parameter
    print "$tekst\n";
    print "$tekst\n";
    print "$tekst\n";
    print "$tekst\n";
    print "$tekst\n";
}

function OppervlakteRechthoek($l,$b){
    //$oppervlakte=$l*$b;
    //return $oppervlakte;
    return $l*$b;
}

function VolumeBalk($l,$b,$h){
    //$oppervlakte=OppervlakteRechthoek($l,$b);
    //$volume = $oppervlakte*$h;
    $volume = OppervlakteRechthoek($l,$b)*$h;
    print "Het volume van de balk is $volume";
}

//Print5Times("dit is de tekst"); #de waarde die we doorgeven is een argument
//OppervlakteRechthoek(10,5);
VolumeBalk(10,5,4);