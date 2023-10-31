<?php

$notes = array(10,12,8,19,3,16,11,13,9);
$moyenne = array_sum($notes) / count($notes);

echo ("Les notes de l'élèves sont : ");

foreach ($notes as $value) 
{
    echo($value." ");
}

echo"<br>";

echo("Sa moyenne est donc : ".round($moyenne,2).".");




?>