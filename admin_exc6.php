<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .success,
        .error {
            color: white;
            width: 20%;
            padding: 10px;
        }

        .success {
            background-color: green;
        }

        .error {
            background-color: red;
        }
    </style>
</head>

<body>
    <h2>Espace d'administration</h2>
    <?php
    if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];
        if ($pseudo == 'admin' && $mdp == 'toto') {
            echo '<p class="success">Bonjour ' . $pseudo . '. Vous êtes sur l\'interface sécurisée.</p>';
        } else {
            echo '<p class="error">Mauvais mot de passe</p>';
        }
    }
    ?>
</body>

</html>