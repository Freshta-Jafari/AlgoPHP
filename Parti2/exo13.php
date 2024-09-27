<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
<h1>Exercice 13</h1>
<p>
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule.

</p>
<h2> Resultat </h2>

<style>
.grid-container {
    display: flex;
    flex-direction: row;
    gap: 20px;
    grid-template-columns: 33% 33% 33%;
    justify-content: center;
    margin: 10px;
    padding: 10px 15px;
    text-align: center;
    
}
</style>
<div class="grid-container">

<div style="background-color:#d3e5f7;">
  <h4>Véhicules Informations : </h4>

  <?php
  $v1 = new Voiture("Peugeot", "408", 5);
  $v2 = new Voiture("Citroen", "C4", 3);

    $v1->demarrer();
    $v1->accelerer(50);

    $v2->demarrer();
    $v2->accelerer(70);
    $v2->stopper();
  ?>

</div>

<div style="background-color:#d3e5f7;">
  <h4>Infos véhicule 1 :</h4>
  ****************** <br>
  <?php
  $v1 = new Voiture("Peugeot", "408", 5);

    $v1->afficherInfomations();
    $v1->demarrer();
    $v1->accelerer(50);

  ?>

</div>

<div style="background-color:#d3e5f7;">
<h4>Infos véhicule 2:</h4>
****************** <br>
<?php
 
  $v2 = new Voiture("Citroen", "C4", 3);

  $v2->afficherInfomations();
   
    $v2->stopper();
  ?>
</div>

</div>




<?php



class Voiture {
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitessActuelle = 0;

    public function __construct($marque, $modele, $nbPortes) {
        $this ->marque = $marque;
        $this ->modele = $modele;
        $this ->nbPortes = $nbPortes;
       // echo "Véhicule {$this->marque} {$this->modele} créé.<br>";
       
    }
    public function demarrer () {

        if ($this -> vitessActuelle > 0){
            echo "La voiture {$this->marque} {$this->modele} est déjà en marche.<br>";
        }else{
            echo "La voiture {$this->marque} {$this->modele} est démarré"."<br>";
        } 
    }
    public function accelerer ($vitesse) {

        if ($this -> vitessActuelle  == 0) {
            echo "La voiture doit d'abord démarrer avant d'accélérer !<br>";
     }else {
        $this->vitessActuelle  += $vitesse;
        echo "La voiture {$this->marque} {$this->modele} accélère de {$vitesse} km/h.
         Vitesse actuelle : {$this->vitessActuelle } km/h.<br>";
    }
}

public function ralentir($vitesse) {
    if ($this->vitessActuelle == 0) {
        echo "La voiture est déjà arrêtée.<br>";
    } else {
        $this->vitessActuelle -= $vitesse;
        if ($this->vitessActuelle < 0) {
            $this->vitessActuelle = 0;
        }
        echo "La voiture {$this->marque} {$this->modele} ralentit de {$vitesse} km/h. Vitesse actuelle : {$this->vitessActuelle} km/h.<br>";
    }
}


public function stopper () {
    if ($this->vitessActuelle == 0) {
        echo "La voiture est déjà arrêtée.<br>";
    } else {
        $this->vitessActuelle = 0;
        echo "La voiture {$this->marque} {$this->modele} est arrêtée.<br>";
    }
}
// Get
public function getMarque () {
    return $this ->marque;
}
public function getModele () {
    return $this ->modele;
}
public function getNbPortes () {
    return $this ->nbPortes;
}
public function getVitessActuelle () {
    return $this ->vitessActuelle;
}
//Set
public function setMarque ($marque) {
    $this -> marque = $marque;
}
public function setModele($modele){
    $this ->modele = $modele;
}
public function setNbPortes ($nbPortes) {
    $this ->nbPortes = $nbPortes;
}
public function setVitessActuelle ($vitesse) {
    $this ->vitessActuelle = $vitesse;
}

public function afficherInfomations (){
   echo "Marque : {$this -> marque}<br>";
    echo "Modele : {$this -> modele}<br>";
    echo "Nombre de portes : {$this -> nbPortes}<br>";
   echo "Vitesse actuelle : {$this -> vitessActuelle} km/h <br>";
}

}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 3);



$array = ["Texte 1","Texte 2","Texte 3",1000,100.5,true,["Texte 4","Texte 5",555]];

var_dump ($array);






