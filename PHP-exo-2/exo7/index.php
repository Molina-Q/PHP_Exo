<?php
// fonction checkbox 
//<form>
//<input></input>
//<label></label>
//<input checked> - lorsque checked est dans le <input> le ou les elements seront visuellement check au chargement de la page 


$elements = array("checked1_false"=>"Choix 1","checked"=>"Choix 2","checked3_false"=>"Choix 3");

function genererCheckbox($array){
    asort($array);
    echo "<form>";
   
    foreach($array as $key => $value){   
            echo "<input type='checkbox' $key id='' name='' value=''>
            <label>$value</label><br>";
    }

    echo 
        "</form>
        " ;
}



genererCheckbox($elements);


// echo "<form>
//   <input type='checkbox' id='' name='' value=''>
//   <label for='vehicle1'> I have a bike</label><br>

//   <input type='checkbox' id='vehicle2' name='vehicle2' value='Car'>
//   <label for='vehicle2'> I have a car</label><br>

//   <input type='checkbox' id='vehicle3' name='vehicle3' value='Boat'>
//   <label for='vehicle3'> I have a boat</label>

// </form>"

?>
