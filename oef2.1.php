<?php
function TaartenSnijden($taarten,$mensen){
    //$stukken=$mensen/$taarten;
    $stukken = intdiv($mensen,$taarten);
    $taartenOver = $mensen % $taarten;
    $taarten1 =$taarten-$taartenOver;

    if ($taartenOver===0){
        print "$taarten1 taarten in $stukken stukken\n\n";
    }
    else{
        $mensenOver = $mensen - ($stukken*$taarten1);
        $stukken2 = $mensenOver/$taartenOver;
        print "$taarten1 taarten in $stukken stukken\nen $taartenOver taarten in $stukken2 stukken\n\n";
    }

}
TaartenSnijden(15,90);
TaartenSnijden(15,120);
TaartenSnijden(15,63);
TaartenSnijden(150,1283);