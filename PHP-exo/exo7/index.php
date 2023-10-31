<?php
/*
Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
*/
$enfant = 8;


// Ma version (trop longue)
// if ($enfant >= 6 and $enfant <= 17 ) 
// {
//     echo ("Votre enfant est valide.");
//     echo "<br>";

//     if ($enfant <= 7 ) 
//     {
//         echo("Il fait partie de la catégorie poussin");
//     } 

//     elseif ($enfant <= 9 ) 
//     {
//         echo("Il fait partie de la catégorie pupille");
//     } 

//     elseif ($enfant <= 12) 
//     {
//         echo("Il fait partie de la catégorie minime");
//     } 

//     else 
//     {
//         echo("Il fait partie de la catégorie cadet");
//     } 
// } 

// elseif ($enfant < 6) 
// {
//     echo("Votre enfant est trop jeune");
// } 

// else 
// {
//     echo("Votre enfant est un adulte");
// }

//Version du formateur (commencer par le plus gros et finir avec le plus petit)
if($enfant >= 12) {
    echo("Il fait partie de la catégorie cadet");
}elseif($enfant >= 10) {
    echo("Il fait partie de la catégorie minime");
}elseif($enfant >= 8) {
    echo("Il fait partie de la catégorie pupille il a ".$enfant." ans");
}elseif($enfant >= 6) {
    echo("Il fait partie de la catégorie pousin");
}else{
    echo "votre enfant ne fait pas partie des catégories prise en compte";
}
?>