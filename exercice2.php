<?php
$nom = 'Martin';
$prenom = 'Fred';
$anneeDeNaissance = '1987';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // génération d'un mot de passe en majuscule d'une longeur de 8 à 12 caractères à partir des variables $nom et $prenom et $anneeDeNaissance de façon aléatoire
    echo 'Votre prénom : ' . $prenom .'.'. 'Votre nom : ' . $nom .'. '. 'Votre année de naissance : ' . $anneeDeNaissance . '.<br>';
    $password = str_shuffle($prenom . $nom . $anneeDeNaissance);
    // limitation du nombre de caractères du mot de passe d'une longeur de 8 à 12 caractères
    $rand = rand(8, 12);
    $password = substr($password, 0, $rand);
    echo 'Votre mot de passe : ' . $password . '<br>';
    echo 'Il comporte ' . strlen($password) . ' caracteres';

    ?>
</body>
</html>