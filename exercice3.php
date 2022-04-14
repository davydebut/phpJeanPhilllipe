<?php
$liste = "
        <ul>
                <li>What's wrong with her?  She's beautiful.  She's rich.  She's got huge... tracts of land.</li>
                <li>When you have found the shrubbery, you must cut down the mightiest tree in the forest... with... a herring</li>
                <li>So, we French fellows outwit you a second time!</li>
                <li>Pie Iesu domine, dona eis requiem.</li>
        </ul>";
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
    echo '<strong>Une belle liste à puces</strong> <br>' . $liste;
    echo '<strong>Le code HTML correspondant</strong>'.'<pre>'. htmlspecialchars($liste).'</pre>';
    echo '<strong>La même en liste numérotée</strong>' . str_replace('ul', 'ol', $liste);
    echo '<strong>Le texte brut, il contient ' . strlen($liste) . ' caractères</strong><br>' . strip_tags($liste);
    ?>
</body>

</html>