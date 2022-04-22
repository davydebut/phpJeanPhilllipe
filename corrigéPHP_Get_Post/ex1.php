<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercice 1</title>
	</head>
	<body>
		
		<?php
 
            // On vérifie que toutes les informations ont bien été passées en paramètres de l'URL
            if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])){
                
                // On récupère la valeur de chaque paramètre dans une variable
                $prenom = $_GET['prenom'];
                $nom = $_GET['nom'];
                $age = htmlspecialchars($_GET['age']);

                // ... et on affiche chaque paramètre récupéré
                echo 'Bonjour, votre prénom est <strong>' . $prenom . '</strong>,<br />';
                echo 'et votre nom est <strong>' . $nom . '</strong>.<br />';
                echo 'Vous avez <strong>' . $age . '</strong> ans.';
                
            }else{
                echo 'Il manque des informations !<br />';
                echo 'Essayez avec ce <a href="ex1.php?prenom=Bob&nom=Dylan&age=78">lien</a>.';
            }
		?>
	</body>
</html>
