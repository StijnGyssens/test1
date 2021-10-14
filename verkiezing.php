<?php
$stemmen = [
    "NVA" => 2455,
    "SP-A" => 2856,
    "CD&V" => 1501,
    "GROEN" => 1744,
    "OPEN-VLD" => 1988,
    "VLAAMSBELANG" => 586,
    "PVDA" => 697
];

function Rechtsuitlijnen($str,$length){
    $space=$length- strlen($str);
    for ($i=0;$i<$space;$i++){
        print " ";
    }
    print $str;
}

$totaal = 0;
$tpercent=0;
foreach ($stemmen as $x => $value) {
    $totaal += $value;
}

print "Totaal aantal stemmen: $totaal\n";

foreach ($stemmen as $x =>$val){
    print $x;
    $percent=number_format($val/$totaal*100,2);
    RechtsUitlijnen($percent,40-strlen($x));
    print "\n";
    $tpercent+=$percent;
}
$tekst="Totaal van de Percentages: ";
print "\n".$tekst;
RechtsUitlijnen($tpercent,40-strlen($tekst));
