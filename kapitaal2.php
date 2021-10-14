<?php

function Rechtsuitlijnen($str,$length){
    $space=$length- strlen($str);
    for ($i=0;$i<$space;$i++){
        print " ";
    }
    print $str;
}

$kap = readline("Wat is het kapitaal? ");
$int = readline("Wat is de intrest in procente? ");
$jaren = readline("Wat is de looptijd? ");
$limiet = readline("Is er een limiet? ");
$lim=null;
if ($limiet==="y"){$lim = readline("Wat is de limiet? ");}

function intrest($kap,$int,$jaren,$lim){
    $l=14;
    $head_jaar=RechtsUitlijnen("Jaar",$l);
    $head_kapitaal=RechtsUitlijnen("Kapitaal",$l);
    $head_rente=RechtsUitlijnen("Rente",$l);
    print "$head_jaar$head_kapitaal$head_rente\n";

    for ($i=1;$i<=$jaren;$i++){
        $over=($lim and $kap>$lim);
        if ($over)break;
        $rente=$kap*$int/100;

        $jaar=RechtsUitlijnen($i,$l);
        $kapitaal=RechtsUitlijnen(number_format($kap,2),$l);
        $rente_str=RechtsUitlijnen(number_format($rente),$l);

        print $jaar.$kapitaal.$rente_str."\n";
        $kap+=$rente;
    }
}
intrest($kap,$int,$jaren,$lim);