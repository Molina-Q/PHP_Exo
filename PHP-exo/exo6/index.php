<?php
/*
Affichage :
Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €
*/
$prixHT = 100  ;
$TVA = 1.2 ;
$quantite = 2 ;
$prixTTC = $prixHT * $quantite * $TVA  ;

echo ("Le prix hors taxe du produit est de ");
echo "$prixHT";
echo (" €");
echo "<br>";
echo ("Vous en avez pris  ");
echo ("$quantite");
echo "<br>";
echo ("Au total cela vous revient à  ");
echo round($prixTTC, 2);
echo (" € ");
echo ("TTC.");
// echo number_format((float)$euros,2,".","");

?>