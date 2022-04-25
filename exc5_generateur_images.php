<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .image1,
        .image2 {
            margin: 10px;
        }

        .image2 {
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <h1>Générateur de galerie d'images</h1>
    <form action="exc5_generateur_images.php" method="post">
        Nombre de ligne : <input type="number" name="nbre_ligne"><br>
        Nombre de colonnes : <input type="number" name="nbre_colonne"><br>
        Format des images : <input type="radio" name="format" value="carré"><label for="carré">carré</label>
        <input type="radio" name="format" value="rond"><label for="rond">rond</label><br>
        <input type="submit" value="Générer">
    </form>
    <!-- <img src="img/cats-q-c-1280-1024-4.jpg" alt=""> -->
    <table>
        <?php
        if (isset($_POST['nbre_ligne']) && isset($_POST['nbre_colonne']) && isset($_POST['format'])) {
            $nbre_ligne = $_POST['nbre_ligne'];
            $nbre_colonne = $_POST['nbre_colonne'];
            $format = $_POST['format'];
            if ($nbre_ligne > 0 && $nbre_ligne <= 20 && $nbre_colonne > 0 && $nbre_colonne <= 10) {
                for ($i = 0; $i < $nbre_ligne; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < $nbre_colonne; $j++) {
                        echo '<td>';
                        if ($format == 'carré') {
                            echo '<img class="image1" src="https://picsum.photos/200?random=1" alt="">';
                        } else {
                            echo '<img class="image2" src="https://picsum.photos/200?random=2" alt="">';
                        }
                        echo '</td>';
                    }
                    echo '</tr>';
                    echo '<br>';
                }
            } else {
                echo 'Veuillez saisir un nombre supérieur à 0 ou inférieur à 20 pour les lignes et inférieur à 10 pour les colonnes';
            }
        }
        ?>
    </table>
</body>

</html>