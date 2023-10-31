<?php

$voiture = array("Peugeot","Renault","BMW","Mercedes");
echo("Nombres de voitures : ");
echo count($voiture);
echo("<br>");
echo("Les marques de voiture sont :<br>");


for ($x = 0;$x<=3; $x++) {
    echo("- ".$voiture[$x]."<br>");

}

?>