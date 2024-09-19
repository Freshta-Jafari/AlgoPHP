<h1>Execice 6</h1>
<p>« Notre formation DL commence aujourd'hui » <br>
Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

</p>
<h2>Resultat</h2>

<?php 


function calculerFacture($quantite, $prixHT, $tauxTVA) {
  
    $montantHT = $quantite * $prixHT;

    $montantTVA = $montantHT * $tauxTVA;

    $montantTTC = $montantHT + $montantTVA;

    echo "Prix unitaire de l’article : " . number_format($prixHT, 2) . " €<br>";
    echo "Quantité : " . $quantite . "<br>";
    echo "Taux de TVA : " . $tauxTVA . "<br>";
    echo "Le montant de la facture à régler est de : " . $montantTTC . " €<br>";

}

$prixHT = 9.99;    // Prix HT par article, par exemple 100 €
$quantite = 5;    // Par exemple, 5 articles
$tauxTVA = 0.2;   // Taux de TVA de 20 %

calculerFacture($quantite, $prixHT, $tauxTVA);


