<?php
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titres D'Albums</title>
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
    <h1>Titre d'albums</h1>
    <p>Trier par
        <?php
        $titre = 'titre';
        $titre_desc = 'titre_desc';
        $numero = 'numero';
        $numero_desc = 'numero_desc';

        if (isset($_GET['titre'])) {
            $titre = sort($albums);
        } elseif (isset($_GET['titre_desc'])) {
            $titre_desc = rsort($albums);
        } elseif (isset($_GET['numero'])) {
            $numero = ksort($albums);
        } elseif (isset($_GET['numero_desc'])) {
            $numero_desc = krsort($albums);
        } else {
            $titre = sort($albums);
        }

        echo ' <a href="?titre">Titre</a> - ';
        echo '<a href="?titre_desc">Titre décroissant</a> - ';
        echo '<a href="?numero">Numéro</a> - ';
        echo '<a href="?numero_desc">Numéro décroissant</a>';

        ?>
    </p>
    <table>
        <tr>
            <th>Numéro</th>
            <th>Titre d'albums</th>
        </tr>
        <?php
        // boucle pour afficher les titres d'albums
        foreach ($albums as $key => $value) {
            echo '<tr>';
            echo '<td>' . $key + 1 . '</td>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>