<?php

/* $albums = array(
    1 => 'Constellation',
    2 => 'Dying surfer meets his maker',
    3 => 'Lightning at the door',
    4 => 'The speed of Cattle',
    5 => 'Stab the unstoppable hero',
    6 => 'Gravitron',
    7 => 'Veneer',
    8 => 'Lapalco',
    9 => 'Scorpio Rising',
    10 => 'Heartbreaker',
    11 => 'Dead root stirring',
    12 => 'Either/or',
    13 => 'Figure 8',
    14 => 'Dreamcake',
    15 => 'Second season',
    16 => 'In our nature',
    17 => 'Brace the wave',
    18 => 'Drie',
    19 => 'Five leaves left',
    20 => 'Beeline',
    21 => 'Siamese dreams',
    22 => 'American thighs',
    23 => 'Shadows on the sun'
); */

$albums = array(
    'Constellation',
    'Dying surfer meets his maker',
    'Lightning at the door',
    'The speed of Cattle',
    'Stab the unstoppable hero',
    'Gravitron',
    'Veneer',
    'Lapalco',
    'Scorpio Rising',
    'Heartbreaker',
    'Dead root stirring',
    'Either/or',
    'Figure 8',
    'Dreamcake',
    'Second season',
    'In our nature',
    'Brace the wave',
    'Drie',
    'Five leaves left',
    'Beeline',
    'Siamese dreams',
    'American thighs',
    'Shadows on the sun'
);

echo $albums[0];
krsort($albums); // trie les tableaux par ordre décroissant selon l'index (krsort) 
/* // trier par titre
$titre 
// trier par titre décroissant
$titre_desc
// trier par index du tableau
$index
// trier par index décroissant
$index_desc */

// ne rien trier tant que j'ai pas cliquer sur le lien de tri
/* if (isset($_GET['titre'])) {
    $titre = sort($albums);
} elseif (isset($_GET['titre_desc'])) {
    $titre_desc = rsort($albums);
} elseif (isset($_GET['index'])) {
    $index = array_multisort($albums);
} elseif (isset($_GET['index_desc'])) {
    $index_desc = array_multisort($albums, SORT_DESC);
} else {
    $titre = sort($albums);
} */

/* // lien html pour les tris
$lien = '<a href="?tri=%s">%s</a>'; */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre d'albums</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h1>Titres d'albums</h1>
    <p>
        <?php
        // afficher le lien pour le tri par titre
        /* echo '<a href="exercice_Get_TriDeTableau.php?titre=' . $titre . '">Trier par titre</a> - ';
        // afficher le lien pour le tri par titre décroissant
        echo '<a href="exercice_Get_TriDeTableau.php?titre_desc=' . $titre_desc . '">Trier par titre décroissant</a> - ';
        // afficher le lien pour le tri par index du tableau
        echo '<a href="exercice_Get_TriDeTableau.php?index=' . $index . '">Trier par index du tableau</a> - ';
        // afficher le lien pour le tri par index décroissant
        echo '<a href="exercice_Get_TriDeTableau.php?index_desc=' . $index_desc . '">Trier par index décroissant</a>'; */
        ?>
    </p>

    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Titres d'albums</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($albums as $key => $value) {
                echo '<tr>';
                echo '<td>' . $key . '</td>';
                echo '<td>' . $value . '</td>';
                echo '</tr>';                
            }
            ?>
        </tbody>
    </table>
</body>

</html>