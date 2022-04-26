<?php
session_start();
if (isset($_POST['OK'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $_SESSION['pseudo'] = $pseudo;
}
$message = $_SESSION['pseudo'];
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
    <h1>Espace d'administration avec Session</h1>
    <p>Bonjour <strong><?= $message ?></strong>, ravis de vous revoir.</p>
    <a href="ex7_deco.php">Se déconnecter</a>
</body>
</html>