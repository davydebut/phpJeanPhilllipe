<?php

$code = "";
$chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$longueur = strlen($chaine);
var_dump($longueur);
for($i=1;$i<=12;$i++)
{
    // on génére un nombre aléatoire entre 0 et la longueur de la chaîne(36) -1(caractères);
    // on stock le résultat dans la variable $code
    $code .= $chaine[rand(0,$longueur-1)];

    // si i est divisible par 4, on ajoute un tiret
    if($i%4 == 0)
    {
        $code .= "-";
    }
    // si i est égal à 12, on retire le dernier tiret
    if($i == 12)
    {
        $code = substr($code, 0, -1);
    }
}

echo $code;

?>