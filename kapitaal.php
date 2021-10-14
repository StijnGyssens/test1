<?php
$kap = readline("Wat is het kapitaal? ");
$int = readline("Wat is de intrest in procente? ");
$jaren = readline("Wat is de looptijd? ");
$limiet = readline("Is er een limiet? ");

function RechtsUitlijnen($tekst, $breedte)
{
    $nieuweTekst = $tekst;
    for ($i = strlen($tekst); $i <= $breedte; $i++) {
        $nieuweTekst = " $nieuweTekst";
    }
    return "$nieuweTekst";
}

function intrest($kap, $int, $jaren)
{
    print RechtsUitlijnen("Jaar", 10) . RechtsUitlijnen("Kapitaal", 20) . RechtsUitlijnen("Rente", 10) . "\n";
    for ($i = 1; $i <= $jaren; $i++) {
        $rente = $kap * $int / 100;
        $kapform = number_format($kap, 2);
        $renteform = number_format($rente, 2);
        print RechtsUitlijnen($i, 10) . RechtsUitlijnen($kapform, 20) . RechtsUitlijnen($renteform, 10) . "\n";
        $kap += $rente;
    }
}

function limiet($kap, $int, $jaren, $limiet)
{
    if ($limiet == "y") {
        $lim = readline("Wat is de limiet? ");
        print RechtsUitlijnen("Jaar", 10) . RechtsUitlijnen("Kapitaal", 20) . RechtsUitlijnen("Rente", 10) . "\n";
        for ($i = 1; $i <= $jaren; $i++) {
            if ($kap < $lim) {
                $rente = $kap * $int / 100;
                $kapform = number_format($kap, 2);
                $renteform = number_format($rente, 2);
                print RechtsUitlijnen($i, 10) . RechtsUitlijnen($kapform, 20) . RechtsUitlijnen($renteform, 10) . "\n";
                $kap += $rente;
            }
        }
    } else {
        intrest($kap, $int, $jaren);
    }
}

limiet($kap, $int, $jaren, $limiet);