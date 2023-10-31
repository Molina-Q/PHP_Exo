<?php
// function afficherInput($texte){

//     echo "<form>" ;

//     foreach($texte as $value){
//         echo "<label for='$value'>$value:</label><br>
//                 <input type='text' name='$value'><br>" ;
//     }

//     echo "</form>" ;
// }

// function afficherRadio($radio){
//     echo "<form>";
//     foreach($radio as $value){   
//             switch ($value) {
//                 case "Monsieur":
//                   echo "<input type='radio' id='' name='boutons' value=''>
//                   <label>Masculin</label><br>";
//                   break;
//                 case "Madame":
//                     echo "<input type='radio' id='' name='boutons' value=''>
//                     <label>Féminin</label><br>";
//                   break;
//                 case "Mademoiselle":
//                     echo "<input type='radio' id='' name='boutons' value=''>
//                     <label>Autre</label><br><br>";
//                 break;
//               }
//     }
//         "</form>
//         " ;
// }

// function alimenterListeDeroulante($liste){

//     echo "<label name='' id=''>Formation : 
//             <br><form name=''>
//                 <select name=''>
//                     <option selected> -- Choississez une formation -- </option>";

//     foreach($liste as $value){
//         echo "<option value='.$value' >$value</option>";
//     }

//     echo 
//                 "</select>
//             </form>
//         </label>
//         " ;
// }


// complet qui contient les informations suivantes : 
// champs de texte avec nom, prénom, adresse email, ville, sexe
// une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
// « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».

// Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
// de validation (submit).


$texteInput = array("Nom","Prénom","Adresse email","Ville");
$nomsRadio = array("Monsieur","Madame","Mademoiselle");
$listeDeroulante = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");




function formFormation($texte, $radio, $liste){
    echo "<form>";
                // Nom, prenom, email, ville//
            foreach($texte as $value){
                echo
                "<label for='$value'>$value:</label><br>
                <input type='text' id='$value' name='$value'><br>
                ";
            }

                //Sexe : masculin, féminin, autre//
            foreach($radio as $value){   
                switch ($value) {
                    case "Monsieur":
                    echo "<input type='radio' id='' name='boutons' value='Masculin'>
                    <label>Masculin</label><br>";
                    break;
                    case "Madame":
                        echo "<input type='radio' id='' name='boutons' value='Féminin'>
                        <label>Féminin</label><br>";
                    break;
                    case "Mademoiselle":
                        echo "<input type='radio' id='' name='boutons' value='Autre'>
                        <label>Autre</label><br><br>";
                    break;
                }
            }

                //Liste déroulante des formations//
        echo "<label name='Formation' id=''>Formation : <br>
            <select name=''>
                <option selected> -- Choississez une formation -- </option>";

                foreach($liste as $value){
                    echo "<option value='.$value' >$value</option>";
                }

        echo "</select>
            </label><br><br>";

        echo "<input type='submit' value='Submit'>";
    echo"</form>";
}

echo formFormation($texteInput, $nomsRadio, $listeDeroulante);

































?>