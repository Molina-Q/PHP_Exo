<?php


/*
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/

*/

// table HTML
$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","Usa"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");


function afficherTableHTML($array){
    ksort($array);

    echo "<table style ='border: 1px solid black; border-collapse: collapse;'>
            <thead>
                <tr>
                    <th style ='border: 1px solid black; font-weight:bold;'> Pays</th>
                    <th style ='border: 1px solid black; font-weight:bold;'> Capital</th>
                    <th style ='border: 1px solid black; font-weight:bold;'> Lien wiki</th>
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
                <td style ='border: 1px solid black;'><a href='https://fr.wikipedia.org/wiki/$value' target='_blank'>Lien</a></td>
                
            </tr>";
            
        }
       echo "</tbody>
        </table>
    ";
}

afficherTableHTML($capitales)


?>