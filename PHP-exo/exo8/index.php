<?php
// faire une table de multiplication//
$nombre = 12 ;
$multiple = 1;

// boucle for //
echo ("Boucle for -");
echo "<br>";
for ($x = 1; $x <= 10; $x++){
    echo ("".$nombre." x $x = " .$x * $nombre. " <br>");
}
echo "<br>";

// boucle while //
echo ("Boucle while -");
echo "<br>";
while ($multiple <=10){
    echo ("".$nombre." x ".$multiple." = " .$multiple * $nombre. " <br>");
    $multiple = $multiple + 1;
}




?>