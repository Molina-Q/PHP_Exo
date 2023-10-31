<?php
// Liste déroulante :
// <label></label> - utiliser pour légender un elements de l'interface utilisateur
// <form></form> - utiliser pour des elements qui permettront à l'utilisateurs de transmettre de infos
// <select></select> - englobe les options disponible pour la liste déroulante (similaire à <ul>)
// <option></option> - utilisé pour représenter un elements au sein d'un menu,formulaire,etc... (similaire à <li>)
// <option selected> - permet à cette option d'apparaittre en premier peu importe son placement dans <option>


$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($array){

    echo "<label name='' id=''>Elements : 
            <form name=''>
                <select name=''>
                    <option selected> -- Choississez un éléments -- </option>";

    foreach($array as $value){
        echo "<option value='.$value' >$value</option>";
    }

    echo 
                "</select>
            </form>
        </label>
        " ;
}



alimenterListeDeroulante($elements);


?>





