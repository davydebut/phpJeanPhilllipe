<?php
// Exercice 1 :
/* $prenom = "Albert";
function direBonjour($prenom){
    echo "Bonjour $prenom !";
}
direBonjour($prenom); */

// Exercice 2 :

/* $tab = [
    "prenom" => "Albert",
    "nom" => "Dupont",
    "age" => 42
];

function direBonjour2($tab){
    echo "Bonjour $tab[prenom] $tab[nom], vous avez $tab[age] ans !";
}

direBonjour2($tab); */

// Exercice 3 :

/* $tab = [
    "prenom" => "Albert",
    "nom" => "Dupont",
    "age" => 42
];

function direBonjour3($tab)
{
    // <=> signifie "Spaceship" (comparaison) : si l'age est inférieur à 30, 
    // on affiche le nombre d'années d'écart
    $result = $tab["age"] <=> 30;
    // echo $result;
    if ($result == 0) {
        echo "Bonjour $tab[prenom] $tab[nom], incroyable, nous avons 
            le même âge !";
    } elseif ($result == 1) {
        echo "Bonjour $tab[prenom] $tab[nom], nous avons " . ($tab["age"] - 30) . " ans d'écart !";
    } elseif ($result == -1) {
        $resultNegatif = $tab["age"] - 30;
        echo "Bonjour $tab[prenom] $tab[nom], nous avons " . ($resultNegatif *= -1) . " ans d'écart !";
    }
}

direBonjour3($tab); */

/* var_dump(direBonjour3($tab));
var_dump($tab);
echo 42 <=> 60; */

// Exercice 4 :

/* $tab = [
    "prenom" => "Albert",
    "nom" => "Dupont",
    "age" => 42
];

function direBonjour3($tab){
    echo "Bonjour $tab[prenom] $tab[nom], vous avez raison, l'âge, 
    c'est personnel !";
}

direBonjour3($tab); */

// Exercice 5 :

$prixHT = 32;
$tauxTVA = 19.6;

function calculerTVA($prixHT, $tauxTVA){
   $resultat = $prixHT += $prixHT * $tauxTVA / 100;
   return number_format($resultat, 2, ',', ' ');
}
echo "Le prix hors taxe est de $prixHT €.<br>";
echo "Le prix TTC est de <strong>" . calculerTVA($prixHT, $tauxTVA) . " €</strong> avec une TVA de $tauxTVA %.";
// var_dump(number_format(calculerTVA($prixHT, $tauxTVA), 2, ',', ' '));