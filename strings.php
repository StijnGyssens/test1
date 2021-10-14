<?php
$tekst="<h1>Belangrijk nieuws</h1>".
    "<p>Nieuwe coronaregels, een indexering van de ambtenarenlonen en een strengere keuring van autolichten: het zijn maar enkele dingen die op 1 oktober anders zullen zijn. Wij hebben de meest opvallende veranderingen voor jou op een rij gezet</p>";

print substr($tekst,0,50)."\n"; //eerste 50 tekens van de string
print substr($tekst,20,50)."\n"; //begin vanaf positie 20
print strlen($tekst)."\n";//hoelang is het opgegeven stuk tekst
print strpos($tekst,"op")."\n"; //waar staat 'op' in de tekst
print substr(str_replace("e","x",$tekst),20,50)."\n";//vervang alle 'e' door 'x'

if (strpos($tekst,"<h1>") === false) print "ik vind geen heading in de tekst\n";
else print "Joehoe! Heading gevonden!!!!\n";
