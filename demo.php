<?php
// $message = 'bonjour';
// resultat d'une moyenne d'un eleve
$nom = 'Martin';
$prenom = 'Anthony';
$note_anglais = 12;
$coefficient_anglais = 2;
$note_maths = 6;
$coefficient_maths = 5;
$note_francais = 14;
$coefficient_francais = 4;
$moyenne = ($note_anglais * $coefficient_anglais + $note_maths * $coefficient_maths + $note_francais * $coefficient_francais) / ($coefficient_anglais + $coefficient_maths + $coefficient_francais);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // commentaires en ligne
    /* 
        commentaires en ligne
    */
    // echo $message; // il affichera bonjour32
    // echo 32;

    // echo 32 + 8; // affichera 40
    echo 'Resultat du candidat ' . $prenom . ' ' . $nom . ' : ' . '<br>';
    echo '<ul><li>Note en anglais (coeff 2) : ' . $note_anglais . '</li>';
    echo '<li>Note en maths (coeff 5) : ' . $note_maths . '</li>';
    echo '<li>Note en francais (coeff 4) : ' . $note_francais . '</li></ul>';
    echo 'Moyenne générale ' . $moyenne . '/20 <br>';

    ?>
</body>
</html>