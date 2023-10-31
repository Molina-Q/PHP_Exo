<?php

//$texte = str_replace($texte, '<span style="color:#FF0000; font-weight:bold; ">'. $texte .'</span>', $texte);

/*
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE 
*/

$texte = ("Mon texte en parametre");

function convertirMajRouge(string $t) {
    $t = str_replace($t, '<span style="color:#FF0000;">'. $t .'</span>', $t);
    $t = strtoupper($t);
    echo ($t);
}

echo("Sans appeler la fonction : ".$texte);

echo "<br>";

echo ("En appellant la fonction : ");

convertirMajRouge($texte);






?>