<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercice 2 - Validation de l'inscription</title>
	</head>
	<body>
        <h1>Vos informations</h1>
		<?php
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';

            
            // On vérifie que tous les champs de formulaire ont bien été complétés
            if(!empty($_POST['civilite']) && !empty($_POST['name']) && !empty($_POST['date']) && !empty($_POST['news'])){
                
                // On récupère les valeurs des champs de formulaire dans des variables
                $civilite = htmlspecialchars($_POST['civilite']);
                $name = $_POST['name'];
                $date = $_POST['date'];
                $news = $_POST['news'];

                // ... et on affiche chaque valeur de champ du formulaire nettoyée par la fonction
                echo '<strong>Votre inscription a bien été enregistrée</strong>';
                echo '<p>Votre nom est <strong>' . $civilite . ' ' . $name . '</strong>,<br />';
                echo 'et votre date de naissance est <strong>' . $date . '</strong>.<br />';
                switch ($news){
                    case 'oui' :
                        echo 'Vous avez été inscrit à notre newsletter.';
                        break;
                    case 'non' :
                        echo 'Voux n\'avez pas souhaité vous inscrire à notre newslettre.';
                        break;
                    case 'bof' :
                        echo 'Vous n\'avez pas franchement l\'air décidé quant à l\'inscription à la newsletter.';
                        break;
                }
                echo '</p>';
                
            }else{
                // s'il manque un des $_POST
                echo 'Merci de renseigner tous les champs du formulaire ! <br />';
                echo '<a href="ex2.php">Retour au formulaire</a>';
            }
		?>
        
	</body>
</html>
