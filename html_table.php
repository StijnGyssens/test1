<?php
$student =  [
    "voornaam"=> "Jan",
    "naam"=> "Janssens",
    "straat"=> "Oude baan",
    "huisnr"=> "22",
    "postcode"=> 2800,
    "gemeente"=> "Mechelen",
    "geboortedatum"=> "14/05/1991",
    "telefoon"=> "015 24 24 26",
    "e-mail"=> "jan.janssens@gmail.com"
];

function StudentToTable($student){
    $html=[];
    array_push($html,"<h1>Student</h1>") ;
    array_push($html,"<table>");
    foreach ($student as $info=>$info_value){
        $info_text=ucfirst($info);
        array_push($html,"<tr><td>$info_text</td><td>$info_value</td></tr>") ;
    }
    array_push($html,"</table>") ;
    return join("\n",$html);
}

print StudentToTable($student);