<?php
// connection à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=individu', 'root', '');
// requête
$resultat = $pdo->query("SELECT * FROM personnes");
// echo '<pre>'; print_r($resultat); echo '</pre>';
// echo '<pre>'; print_r($resultat->fetch(PDO::FETCH_ASSOC)); echo '</pre>';
// afficher la table personne de la base de données individu sous la forme d'une listes à puces HTML
while ($personne = $resultat->fetch(PDO::FETCH_ASSOC)) {
    echo '<h2>' . $personne['prenom'] . ' ' . $personne['nom'] . '</h2>';
    echo '<ul>';
    echo '<li>Adresse : ' . $personne['adresse'] . '</li>';
    echo '<li>Date de naissance : ' . $personne['naissance'] . '</li>';
    echo '<li>Profession : ' . $personne['profession'] . '</li>';
    echo '</ul>';
}