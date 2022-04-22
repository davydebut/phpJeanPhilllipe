<?php

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
    <p><a href="presentation1.php?prenom=Jacques&nom=Dupont&age=45">Presentation</a></p>
    <form action="GET_POST.php" method="POST">
        <input type="text" name="message">
        <input type="submit" value="Soumettre">
    </form>
    <?php
    /* fonction php qui permet d'éviter une faille xss
    cette fonction permet de sécuriser les données reçues par le formulaire
    htmlspecialchars($_POST['message']); */
    print_r($_POST);
    var_dump($_POST);
    if(isset($_POST['message'])){
        $message = htmlspecialchars($_POST['message']);
        // si le champ est vide
        if(!empty($_POST['message'])){
            echo $message;
        } else {
            echo 'Veuillez saisir un message !';
        }
    }
    ?>
</body>

</html>