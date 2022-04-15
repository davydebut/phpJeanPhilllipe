<?php 

$nom = 'Martin';
$prenom = 'Anthony';
$note_anglais = 7;
$coefficient_anglais = 2;
$note_maths = 11;
$coefficient_maths = 5;
$note_francais = 12.5;
$coefficient_francais = 4;
$moyenne = ($note_anglais * $coefficient_anglais + $note_maths * $coefficient_maths + $note_francais * $coefficient_francais) / ($coefficient_anglais + $coefficient_maths + $coefficient_francais);
// arrondir la moyenne
$moyenne = round($moyenne, 2);

// si moyenne est supérieur à 12 alors coloré en vert
if ($moyenne >= 12) {
    $colorMoyenne = 'green';
  }
// si moyenne est inférieur à 10 alors coloré en rouge
elseif ($moyenne < 10) {
    $colorMoyenne = 'red';
}
// si moyenne est entre 10 et 12 alors coloré en bleu
else {
    $colorMoyenne = 'blue';
}

// fonction qui teste les différentes notes et retourne la class css
function testNote($note) {
    if ($note < 10) {
        return 'style="color: red;"';
    }
    else {
        return '';
    }
}


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
    echo 'Resultat du candidat ' . $prenom . ' ' . $nom . ' : ' . '<br>';
    echo '<ul><li '.testNote($note_anglais).'>Note en anglais (coeff '.$coefficient_anglais.') : ' . $note_anglais . '</li>';
    echo '<li '.testNote($note_maths).'>Note en maths (coeff '.$coefficient_maths.') : ' . $note_maths . '</li>';
    echo '<li '.testNote($note_francais).'>Note en francais (coeff '.$coefficient_francais.') : ' . $note_francais . '</li></ul>';
    echo '<p> Moyenne générale ' . '<strong style="color: ' . $colorMoyenne . '">' . $moyenne . '</strong>'. '/20 </p> <br>';
    ?>
</body>
</html>