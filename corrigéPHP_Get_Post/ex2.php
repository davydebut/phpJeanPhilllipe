<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercice 2</title>
	</head>
	<body>
		
        <h1>Formulaire d'inscription</h1>
		
        <form action="ex2_submit.php" method="post">
            <fieldset> <!-- On crée un fieldset (ligne stylisé filigrane) pour mettre les champs dans un bloc -->
                <legend>Formulaire d'inscription</legend>
                Civilité :
                <input type="radio" checked id="m" name="civilite" value="M." /><label for="m">M.</label>
                <input type="radio" id="mlle" name="civilite" value="Mlle" /><label for="mlle">Mlle.</label>
                <input type="radio" id="mme" name="civilite" value="Mme" /><label for="mme">Mme.</label><br />

                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" placeholder="Votre nom ici" /><br />

                <label for="date">Date de naissance :</label>
                <input type="date" id="date" name="date" /><br />

                <label for="news">Souhaitez-vous recevoir la newsletter ?</label>
                <select id="news" name="news">
                    <option value="oui">Oui, certainement !</option>
                    <option value="non">Pas du tout.</option>
                    <option value="bof">Ne se prononce pas.</option>
                </select>
                <br />

                <input type="reset" value="Effacer" />
                <input type="submit" value="Valider" />
            </fieldset>
        </form>
	</body>
</html>
