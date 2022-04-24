<?php
// connection à la base de données
$pdo = new PDO('mysql:host=localhost:3307;dbname=individu', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// requête
$resultat = $pdo->query("SELECT * FROM personnes");
// echo '<pre>'; print_r($resultat); echo '</pre>';
// echo '<pre>'; print_r($resultat->fetch(PDO::FETCH_ASSOC)); echo '</pre>';
// afficher la table personne de la base de données individu sous la forme d'une listes à puces HTML
echo '<ul>';
while ($personne = $resultat->fetch(PDO::FETCH_ASSOC)) {
    echo '<li>' . $personne['prenom'] . ' ' . $personne['nom'] . '</li>';
}
echo '</ul>';
?>