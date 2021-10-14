<?php
function RechtsUitlijnen ($tekst, $breedte){
    $nieuweTekst=$tekst;
    for($i=strlen($tekst);$i<=$breedte;$i++){
        $nieuweTekst = " $nieuweTekst";
    }
    print "$nieuweTekst\n";
}

RechtsUitlijnen("banaan", 70);
RechtsUitlijnen("nog een banaan", 70);
RechtsUitlijnen("2.30 euro", 70);
RechtsUitlijnen("dit is een hele lange zin", 70);
RechtsUitlijnen("14.10 euro", 70);
