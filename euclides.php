<?php
$g1=readline("Geef een getal aub: ");
$g2=readline("Geef nog een getal aub: ");


function euclides($g1,$g2){
    while($g1!=$g2){
        if ($g1>$g2){
            $g1-=$g2;
        }else{
            $g2-=$g1;
        }
    }
    return $g1;
}


print "De grootste gemene deler van $g1 en $g2 is ".euclides($g1,$g2)."\n";