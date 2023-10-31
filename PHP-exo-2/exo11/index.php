<?php

// Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
// chaîne de caractère représentant une date.

//l (L minuscule) - affiche le jour de manière textuel 
//F - affiche le mois de manière textuel


function formaterDateFr($date){
$frDate = "0-0-0";
$frDate = new DateTime($date);
echo date_format($frDate,"l d F Y");
}

echo formaterDateFr("2018-02-23");

?>