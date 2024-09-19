<h1>Execice 5</h1>
<p>« Notre formation DL commence aujourd'hui » <br>
Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.

</p>
<h2>Resultat</h2>

<?php 

$valeur_francs = 100;
$taux_conversion = 6.55957;
$valeur_euros = $valeur_francs / $taux_conversion;
$valeur_euros_arrondie = round($valeur_euros, 2);
echo "Montant en francs : ". $valeur_francs ."<br>". "100 francs : " . $valeur_euros_arrondie . " euros.";
