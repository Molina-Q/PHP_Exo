<?php
/*
Affichage :
Montant en francs : 100
100 francs = 15.24 €
*/
$francs = 100  ;
$euros = $francs /  6.56167979  ;

echo ("Montant en francs : ");
echo "$francs";
echo "<br>";
echo ("En euros cela revient à : ");
echo round($euros, 2);
echo (" €")
// echo number_format((float)$euros,2,".","");

?>