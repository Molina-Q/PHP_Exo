<?php

$mail = "elan@contact";
$mail = str_replace($mail, '<span style="font-weight:bold;">'. $mail .'</span>', $mail);

if (filter_var($mail,FILTER_VALIDATE_EMAIL )){
    echo("L'adresse ".$mail."est une adresse mail valide");
}else{
    echo("L'adresse ".$mail." n'est pas une adresse mail valide");
};







?>