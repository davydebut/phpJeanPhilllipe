<?php
session_start();
if (isset($_POST['pseudo']) && isset($_POST['OK'])) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['cookie'] = $_POST['cookie'];
    $pseudo = $_SESSION['pseudo'];
    if (isset($_SESSION['cookie'])) {
        setcookie('pseudo', $pseudo, time() + (24*7*3600), '/', '', false, false);
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
    <h1>Espace d'administration avec session et cookie</h1>
    <p>bonjour <strong><?= $pseudo ?></strong>, ravis de vous revoir</p>
    <a href="ex8_deco.php">Déconnexion</a>
</body>

</html>