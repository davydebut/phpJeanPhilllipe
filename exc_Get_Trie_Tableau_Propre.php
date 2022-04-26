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

function boucle($albums)
{
    echo '<table><thead><tr><th>Numéro</th><th>Titre d\'album</th></tr></thead>';
    foreach ($albums as $key => $value) {
        echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
    }
    echo '</table>';
}
if (isset($_GET['tri'])) {
    $tri = htmlspecialchars($_GET['tri']);
    switch ($_GET['tri']) {
        case 'titre':
            asort($albums);
            break;
        case 'titre_desc':
            arsort($albums);
            break;
        case 'index':
            ksort($albums);
            break;
        case 'index_desc':
            krsort($albums);
            break;
        default:
            echo '<p>Vous devez cliquer sur un lien pour trier</p>';
            break;
    }
}
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
        <a href="exc_Get_Trie_Tableau_Propre.php?tri=titre">Trier par titre</a> -
        <a href="exc_Get_Trie_Tableau_Propre.php?tri=titre_desc">Trier par titre décroissant</a> -
        <a href="exc_Get_Trie_Tableau_Propre.php?tri=index">Trier par index du tableau</a> -
        <a href="exc_Get_Trie_Tableau_Propre.php?tri=index_desc">Trier par index décroissant</a>
    </p>
    <?php
    boucle($albums);
    ?>
</body>

</html>