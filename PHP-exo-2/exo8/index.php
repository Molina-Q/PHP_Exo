<?php


$url = "http://my.mobirise.com/data/userpic/764.jpg";



function repeterImage($image,$nb){

$compteur=1;

    while($compteur<=$nb){
        echo ("<img src='$image' alt='chiens'/>");
        $compteur = $compteur + 1;
    }

}

repeterImage($url, 4);

?>