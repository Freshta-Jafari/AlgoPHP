<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
<h1>Exercice 14</h1>
<p>
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
</p>
<h2> Resultat </h2>
<?php
// Classe Voiture
class Voiture {
    // Propriétés de la voiture
    protected $marque;
    protected $modele;

    // Constructeur pour initialiser les propriétés
    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    // Méthode pour obtenir les informations de la voiture
    public function getInfos() {
        return "Voiture: {$this->marque} {$this->modele}";
    }
}

// Classe VoitureElec qui hérite de Voiture
class VoitureElec extends Voiture {
    // Propriété supplémentaire
    private $autonomie;

    // Constructeur pour initialiser les propriétés de VoitureElec, en incluant celles de Voiture
    public function __construct($marque, $modele, $autonomie) {
        // Appel du constructeur parent pour initialiser marque et modèle
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    // Redéfinition de la méthode getInfos pour inclure l'autonomie
    public function getInfos() {
        return "Voiture électrique: {$this->marque} {$this->modele}, Autonomie: {$this->autonomie} km";
    }
}

// ----------- Jeux de tests -----------

// Instanciation d'une voiture classique
$v1 = new Voiture("Peugeot", "408");

// Instanciation d'une voiture électrique
$ve1 = new VoitureElec("BMW", "I3", 100);

// Affichage des informations des voitures
echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";

