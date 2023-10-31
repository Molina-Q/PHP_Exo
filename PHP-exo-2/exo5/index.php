<?php
// créer un formulaire avec une boucle dans une fonction
// en utilisant <form>
// <form> est utilisé pour des formulaires et des elements qui permettront à l'utilsiteurs de transmettre des informations
$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($array){

    echo "<form>" ;

    foreach($array as $value){
        echo "<label for='$value'>$value:</label><br>
                <input type='text' name='$value'><br>" ;
    }

    echo "</form>" ;
}



afficherInput($nomsInput);



?>