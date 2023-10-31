<?php


/*
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
*/

// table HTML
$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","Usa"=>"Washington","Italie"=>"Rome");


function afficherTableHTML($array){
    ksort($array);

    echo "<table style ='border: 1px solid black; border-collapse: collapse;'>
            <thead>
                <tr >
                    <th style ='border: 1px solid black; font-weight:bold;'> Pays</th>
                    <th style ='border: 1px solid black; font-weight:bold;'> Capital</th>
                </tr>
            </thead>
            <tbody> ";
    
    // echo('<span style ="border: 1px solid black; font-weight:bold;">'."Pays".'</span>');
    // echo('<span style ="border: 1px solid black; font-weight:bold;">'."Capitale".'</span><br>');

    foreach($array as $key => $value){
        // echo('<span style="border: 1px solid black; border-collapse: collapse; ">'.$key.'</span>');
        // echo('<span style="border: 1px solid black;   ">'.$value.'</span><br>');
        $key = strtoupper($key);
        echo "<tr>
                <td style ='border: 1px solid black;'>".$key."</td>
                <td style ='border: 1px solid black;'>".$value."</td>
            </tr>";
            
        }
       echo "</tbody>
        </table>
    ";
}

afficherTableHTML($capitales)


?>