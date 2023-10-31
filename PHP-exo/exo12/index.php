<?php

//ceci est un associative arrays, un arrays avec deux éléments par ligne
$Langue = array("Mickael"=>"Salut","Virgile"=>"Hola","Marie-claire"=>"Hello");


// Key est la première valeur de l'array associative, $x dans une boucle for foreach
// Value est la deuxieme valeur de la même ligne, $x_value dans une boucle foreach

//(dans un array classique avec une valeur, l'element de l'arrays sera appellé Value et non Key)//

// Ici Value  = salut, hola, hello 
// Key = Mickael, Virgile et Marie-claire

foreach($Langue as $x => $x_value) {
    echo ($x." ".$x_value);
    echo "<br>";
}

echo "<br>";

ksort($Langue);

foreach($Langue as $x => $x_value) {
    
    echo($x." ".$x_value);
    echo "<br>";
}



?>