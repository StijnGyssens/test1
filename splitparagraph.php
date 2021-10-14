<?php
$tekst = "Ruim 50.000 kandidaten hengelen in Vlaanderen naar uw stem en hopen " .
    "straks gemeenteraadslid te worden. Het is maar de vraag of ze zo blij gaan " .
    "zijn als die droom in vervulling gaat. De inzet van de lokale verkiezingen, op " .
    "14 oktober, is heel precies in cijfers vastgelegd: er moeten 7.398 nieuwe " .
    "gemeenteraadsleden verkozen worden, verspreid over de 308 Vlaamse " .
    "gemeenten, plus 175 nieuwe provincieraadsleden.";


//print wordwrap($tekst,40,"\n");
$number=40;

function wrap($tekst,$number){
    for ($i=$number-1;$i<=strlen($tekst);$i+=$number){
        while ($tekst[$i] != " " xor $tekst[$i] != "," xor $tekst[$i] != "\n") {
            $i -= 1;
        }
        $tekst[$i] = "\n";
    }

    return $tekst;
}

print wrap($tekst,$number);