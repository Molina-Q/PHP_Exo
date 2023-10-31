<?php

$payer = 152 ;
$verse = 200 ;
$reste = $verse - $payer;
$monnaie_10 = 0 ;
$monnaie_5 = 0 ;
$monnaie_2 = 0 ;
$monnaie_1 = 0 ;

echo("Montant à payer : ".$payer."€ <br>");
echo("Montant versé : ".$verse."€ <br>");
echo("Reste à payer : ".$reste."€ <br>");
echo("Monnaie rendu : <br>");

while( $reste - 10 > 0 ){
    $monnaie_10 = $monnaie_10 + 1;
    $reste = $reste - 10;
}
while( $reste - 5 > 0 ){
    $monnaie_5 = $monnaie_5 + 1;
    $reste = $reste - 5;
}
while( $reste - 2 > 0 ){
    $monnaie_2 = $monnaie_2 + 1;
    $reste = $reste - 2;
}
while( $reste - 1 >= 0 ){
    $monnaie_1 = $monnaie_1 + 1;
    $reste = $reste - 1;
}
 echo("".$monnaie_10."  billets de 10 euros - ".$monnaie_5." billets de 5 euros - ".$monnaie_2." pieces de 2 euros - ".$monnaie_1." pieces de 1 euro.");

?>