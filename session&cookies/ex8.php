<?php
if(isset($_COOKIE['pseudo'])) {
    $pseudo = $_COOKIE['pseudo'];
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
    <h1>Formulaire de login avec session et cookie</h1>
    <form action="ex8_admin.php" method="post">
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo" value="<?=$pseudo?>"><br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"><br>
        <input type="checkbox" name="cookie" id="cookie">
        <label for="cookie">Se souvenir de moi (pendant une semaine)</label><br>
        <input type="submit" name="OK" value="OK">
    </form>
</body>
</html>