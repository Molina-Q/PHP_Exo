<?php


// fonction checkbox 
//<form>
//<input></input>
//<label></label>
//<input checked> - lorsque checked est dans le <input> le ou les elements seront visuellement check au chargement de la page 


$nomsRadio = array("Monsieur"=>"Masculin","Madame"=>"Féminin","Mademoiselle"=>"Autre");


function afficherRadio($array){
    echo "<form>";
   
    foreach($array as $value){   
            echo "<input type='radio' id='' name='boutons' value=''>
            <label>$value</label><br>";
    }
        "</form>
        " ;
}


afficherRadio($nomsRadio);

?>
























