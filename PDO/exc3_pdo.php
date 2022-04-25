<?php
$dbh = new PDO('mysql:host=localhost;dbname=individu', 'root', '');

if (!empty($_POST['pseudo']) && !empty($_POST['pwd']) && isset($_POST['valider'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $pwd = htmlspecialchars($_POST['pwd']);
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);

    $prepare = $dbh->prepare("SELECT COUNT(*) AS nbre FROM users WHERE pseudo = :pseudo");
    $prepare->execute(['pseudo' => $pseudo]);
    $result = $prepare->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    if (!($result['nbre'] == 0)) {
        $prepare = $dbh->prepare("INSERT INTO users (`pseudo`, `pwd`) VALUES (:pseudo, :pwd)");
        $prepare->execute(
            [
                'pseudo' => $pseudo,
                'pwd' => $pwd
            ]
        );
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
    <form action="exc3_pdo.php" method="post">
        <fieldset>
            <legend>Test d'authentification</legend>
            <label for="pseudo">pseudo :</label>
            <input type="text" name="pseudo" id="pseudo"><br>
            <label for="pwd">Mot de passe :</label>
            <input type="password" name="pwd" id="pwd"><br>
            <input type="submit" name="valider" value="Envoyer">
        </fieldset>
    </form>
</body>

</html>