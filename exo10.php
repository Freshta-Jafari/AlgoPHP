<h1>Execice 10</h1>
<p>« Notre formation DL commence aujourd'hui » <br>

A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.

</p>
<h2>Resultat</h2>

<?php 

function renduMonnaie($montantAPayer, $sommeVersee) {
    
    $monnaieARendre = $sommeVersee - $montantAPayer;
    $rendu = $sommeVersee - $montantAPayer;
    $restAPayer = $sommeVersee - $montantAPayer;

    echo "Montant à payer : ". $montantAPayer . "€ <br>";
    echo "Montant versé : ". $sommeVersee . "€ <br>";
    echo "Reste à payer : ". $restAPayer . "€ <br>";
    echo "********************************************************** <br>";

    if ($monnaieARendre < 0) {
        return "Montant insuffisant pour régler l'achat.";
    } elseif ($monnaieARendre == 0) {
        return "Pas de monnaie à rendre.";
    }

    
    $rendu = [];

   
    $rendu['billets10'] = intdiv($monnaieARendre, 10);
    $monnaieARendre %= 10;

    
    $rendu['billets5'] = intdiv($monnaieARendre, 5);
    $monnaieARendre %= 5;

    
    $rendu['pieces2'] = intdiv($monnaieARendre, 2);
    $monnaieARendre %= 2;

    
    $rendu['pieces1'] = $monnaieARendre;

    
    return "Rendu de monnaie : " .
        ($rendu['billets10'] > 0 ? $rendu['billets10'] . " billet(s) de 10€, " : "") .
        ($rendu['billets5'] > 0 ? $rendu['billets5'] . " billet(s) de 5€, " : "") .
        ($rendu['pieces2'] > 0 ? $rendu['pieces2'] . " pièce(s) de 2€, " : "") .
        ($rendu['pieces1'] > 0 ? $rendu['pieces1'] . " pièce(s) de 1€" : "");

  
}


$montantAPayer = 152; 
$sommeVersee = 200;   
echo renduMonnaie($montantAPayer, $sommeVersee);








