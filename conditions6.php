<?php
/* $nom;
$prenom;
$anneeDeNaissance;
$chaussure;

class Personne
{
    public $nom;
    public $prenom;
    public $anneeDeNaissance;
    public $chaussure;
    public $membreFamille;

    public function __construct($nom, $prenom, $anneeDeNaissance, $chaussure, $membreFamille)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->anneeDeNaissance = $anneeDeNaissance;
        $this->chaussure = $chaussure;
        $this->membreFamille = $membreFamille;
    }
}

$Pierre = new Personne("Dupont", "Pierre", "1955", "Chaussure", false);

// var_dump($Pierre);

// 2022 - 1955 = 67
$age = date("Y") - $Pierre->anneeDeNaissance;

// var_dump(date("Y"));
// var_dump($Pierre->anneeDeNaissance);
// var_dump($age);

if ($Pierre->anneeDeNaissance >= 30) {
    if ($Pierre->membreFamille == true) {
        if ($Pierre->chaussure == "Chaussure") {
            echo "Bonjour, je m'appelle " . $Pierre->prenom . " " . $Pierre->nom . " et j'ai " . $age . " ans. Je suis membre de la famille du gérant.
            Je porte également des chaussures. Donc je suis admis au club.";
        } elseif ($Pierre->membreFamille == false) {
            echo "Bonjour, je m'appelle " . $Pierre->prenom . " " . $Pierre->nom . " et j'ai " . $age . " ans. Mais Je ne suis pas membre de la famille du gérant.";
        } elseif ($Pierre->chaussure != "Chaussure") {
            echo "La personne ne porte pas de chaussures donc n'est pas admis au club.";
        }
    }
} elseif ($Pierre->anneeDeNaissance < 30 || $Pierre->membreFamille == false) {
    if ($Pierre->chaussure == "Chaussure") {
        echo "Bonjour, je m'appelle " . $Pierre->prenom . " " . $Pierre->nom . " et j'ai " . $age . " ans. Je suis membre de la famille du gérant.
        Je porte également des chaussures. Donc je suis admis au club.";
    } elseif ($Pierre->chaussure != "Chaussure") {
        echo "La personne ne porte pas de chaussures donc n'est pas admis au club.";
    }
} */

$nom = 'Dupont';
        $prenom = 'Marie';
        $annee_naissance = 1975;
        $baskets = false;

        // Il est peu courant de présenter les différentes expressions testées de manière indentée,
        // mais c'est très utile ici pour visualiser les 'blocs' conditionnels
        // tels qu'ils s'articulent entre eux.
        if( ! $baskets &&   // On commence par vérifier qu'on ne porte pas de baskets
            (
                (
                    $annee_naissance > (date('Y') - 40) && $annee_naissance <= (date('Y') - 30)     // Puis on teste l'âge à la louche en comparant $annee_naissance avec l'intervalle d'années "autorisées"
                ) || (
                    $nom == 'Martin' && (   // Pour les membres de la famille, on teste le nom de famille...
                        $prenom == 'Sophie' || $prenom == 'Paul' || $prenom == 'Joseph' || $prenom == 'Marie' || $prenom == 'Fred'  // ...puis le prénom
                    )
                ) || (
                    $nom == 'Dupont' && $prenom == 'Serge'  // S'il s'agit du propriétaire de l'immeuble
                )
            )
        ){
            
            echo 'Bienvenue au club, ' . $prenom . ' ' . $nom . '.';
            
        }else{
            
            echo 'Accès refusé.';
            
        }
