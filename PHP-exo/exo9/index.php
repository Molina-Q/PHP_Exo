<?php

// Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
// plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).



$age = 36 ;
$sexe = "F" ; // "F" ou "H" //

echo ("Age : ".$age."<br>");
echo ("Sexe : ".$sexe."<br>");

if ($sexe == "F"){
    if ($age<= 35 and $age>=18 ){
        echo("Vous êtes une femmme de ".$age." ans, vous êtes imposable.");
    } else { 
        echo("Vous êtes une femme de ".$age." ans vous n'êtes pas imposable");
    }
}

if ($sexe == "H"){
    if ($age >= 20){
        echo("Vous êtes un homme de ".$age." ans, vous êtes imposable.");
    } else { 
        echo("Vous avez ".$age." ans vous n'êtes pas imposable");
    }
    
} 


// } elseif($sexe == "H" and $age>=20){
//     echo("Vous êtes un homme de ".$age." ans, vous êtes imposable");
// } else {
//     echo("Vous n'êtes pas imposable");
// 



?>