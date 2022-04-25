<?php
$db = new PDO('mysql:host=localhost;dbname=individu', 'root', '');
// $prepare = $db->prepare('SELECT * FROM personnes');

if(isset($_POST['valider'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $naissance = htmlspecialchars($_POST['naissance']);
    $profession = htmlspecialchars($_POST['profession']);
    $prepare = $db->prepare("INSERT INTO personnes (`prenom`, `nom`, `adresse`, `naissance`, `profession`) VALUES (:prenom, :nom, :adresse, :naissance, :profession)");
    
    // Le marqueur ':prenom' est un marqueur nominatif qui sera remplacé par la valeur de la variable $prenom lors de l'exécution de la requête SQL et qui est donc protégée contre les injections SQL.

    // $db->exec("INSERT INTO personnes VALUES (NULL, '$prenom', '$nom', '$adresse', '$naissance', '$profession')");
    // executer la requete preparee
    $prepare->execute(
        [
            'prenom' => $prenom,
            'nom' => $nom,
            'adresse' => $adresse,
            'naissance' => $naissance,
            'profession' => $profession
        ]);

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
    <form action="exc2_pdo.php" method="post">
        <fieldset>
            <Legend>Enregistrement d'un nouveau spectacteur</Legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom"><br>
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse"><br>
            <label for="naissance">Date de naissance (format <em>jj-mm-aaaa</em>) :</label>
            <input type="date" name="naissance" id="naissance"><br>
            <label for="profession">Catégorie professionnelle :</label>
            <input type="text" name="profession" id="profession"><br>
            <input type="submit" name="valider" value="Envoyer">
        </fieldset>
    </form>
</body>
</html>