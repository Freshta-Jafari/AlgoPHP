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

class Voiture {
    
    protected $marque;
    protected $modele;

    public function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getInfos() {
        return "Voiture: {$this->marque} {$this->modele}";
    }
}


class VoitureElec extends Voiture {
   
    private $autonomie;

  
    public function __construct($marque, $modele, $autonomie) {
       
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }


    public function getInfos() {
        return "Voiture électrique: {$this->marque} {$this->modele}, Autonomie: {$this->autonomie} km";
    }
}

// ----------- Jeux de tests -----------


$v1 = new Voiture("Peugeot", "408");


$ve1 = new VoitureElec("BMW", "I3", 100);


echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";

