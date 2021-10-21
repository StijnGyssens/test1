<?php

function Align($str, $length, $modus)
{
    $sp = [];
    $tekst="";
    $space = $length - strlen($str);
    if ($modus == "L") {
        for ($i = 0; $i <= $space; $i++) {
            array_splice($sp, 0, 0, " ");
        }
        $tekst = $str . join("", $sp);
    } elseif ($modus == "R") {
        for ($i = 0; $i < $space; $i++) {
            array_push($sp, " ");
        }
        $tekst = join("", $sp) . $str;
    }
    return $tekst;
}

function Lijn($length)
{
    $lijn = [];
    for ($i = 0; $i <= $length; $i++) {
        array_push($lijn, "-");
    }
    return join("", $lijn);
}

function Centreren($str, $length)
{
    $tekst = [$str];
    $links = ceil(($length - strlen($str)) / 2);
    $rechts = floor(($length - strlen($str)) / 2) - 1;
    for ($i = 0; $i <= $rechts; $i++) {
        array_push($tekst, "-");
    }
    for ($i = 0; $i <= $links; $i++) {
        array_splice($tekst, 0, 0, "-");
    }
    return join("", $tekst);
}

function StijnGyssens()
{
    $artikel = "";
    $array_key = [];
    $array_value = [];
    $array = [];
    $length = 40;

    while ($artikel != "q") {   //zolang er geen "q" is opgegeven loop verder
        $artikel = readline("Welk artikel? ");
        if ($artikel != "q") {         //als artikel="q" moet je geen aantal vragen en geen extra berekeningen doen
            $art = ucfirst($artikel);    //eerste letter van de key uppercase maken
            $aantal = readline("Aantal? ");       //vraag het aantal
            array_push($array_key, $art);        //voeg het artikel toe aan de array met artikels
            array_push($array_value, $aantal);   //voeg het aantal toe aan de array met hoeveelheden
        }
        $array = array_combine($array_key, $array_value);
        //gebruik de values van de array met artikels als key en de values van de aantal array als values en maak hier een nieuwe array mee
    }
    ksort($array); //sorteer de array oplopend aan de hand van de keys

//print de tekst
    print Centreren("BOODSCHAPPEN", $length) . "\n";
    foreach ($array as $key => $val) {
        print $key;
        print Align($val, $length - strlen($key), "R");
        print "\n";
    }
    print Lijn($length) . "\n";
    $aantallijnen = "Aantal lijnen: " . count($array);
    $totaal = "Totaal: " . array_sum($array);
    print Align($aantallijnen, $length - strlen($totaal), "L");
    print $totaal . "\n";
    print Lijn($length) . "\n";
}

StijnGyssens();