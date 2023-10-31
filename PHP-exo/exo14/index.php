<?php
// Affichage : (si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985 :
// Age de la personne : 33 ans 4 mois 4 jours 

//$date_courante = array(2018,05,21);
// $date_personne = array(1985,01,17);
// $terme = array("ans","jours","mois");
// $count_array = count($date_courante) - 1;
// $age = array();


// echo("Age de la personne :");

// for ( $x=0 ; $x <= $count_array ; $x++ ) {
//     $age[$x] = $date_courante[$x] - $date_personne[$x] ;
//     echo (" ".$age[$x]." ".$terme[$x]) ;
// }

$anne_courante = new DateTime("2018-05-21");
$anne_personne = new DateTime("1985-01-17");


echo $anne_courante->format("Y-m-d") . "\n" ;
echo $anne_personne->format("Y-m-d") . "\n" ;


?>

