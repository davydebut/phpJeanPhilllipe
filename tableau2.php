<?php
// Exercice 2 : Tableau à partir d'une chaîne
/* $adresseEmail = "bob.dylan@wanadoo.fr";
$utilisateur = substr($adresseEmail, 0, strpos($adresseEmail, "@"));
$serveurMail = substr($adresseEmail, strpos($adresseEmail, "@") + 1);
echo "L'utilisateur est <strong> $utilisateur </strong> et le serveur mail est <strong> $serveurMail. </strong>";
 */
// Exercice 3 : Parcourire un tableau
// $prenoms = array("Neil", "Nick", "Bob", "Tim", "Elliot");
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nombre de l'index</th>
        </tr>
        <?php
        /* asort($prenoms);
        foreach ($prenoms as $prenom) {
            echo "<tr>";
            echo "<td>$prenom</td>";
            echo "<td>". array_search($prenom, $prenoms) ."</td>";
            echo "</tr>";
        } */
        ?>
    </table>
</body>
</html> -->
<?php
// Exercice 4 : Parcourir un tableau associatif
$travailleur = array(
    "Nom" => "Young",
    "Prénom" => "Neil",
    "Profession" => "Musicien",
    "Nationalité" => "Canadien"
);

// print_r(array_keys($travailleur));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td,
        th {
            border: 1px solid grey;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php
            foreach (array_keys($travailleur) as $key) {
                echo "<th>$key</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($travailleur as $info) {
                echo "<td>$info</td>";
            }
            ?>
            <?php
            /* foreach ($travailleur as $cle => $valeur) {
            echo "<th>$cle</th>";
            echo "<td>$valeur</td>";
        } */
            ?>
    </table>
</body>

</html>