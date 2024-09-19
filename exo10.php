<h1>Execice 10</h1>
<p>« Notre formation DL commence aujourd'hui » <br>

A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.

</p>
<h2>Resultat</h2>

<?php 

function renduMonnaie($montantAPayer, $sommeVerse){
    $rendu = $sommeVerse - $montantAPayer;
    $restAPayer = $sommeVerse - $montantAPayer;


    if ( $rendu < 0) {
        echo "La somme versée est insuffisante.";
        return;
    }
    $billets10 = 0;
    $billets5 = 0;
    $pieces2 = 0;
    $pieces1 = 0;
    
    while ($rendu >= 10){
        $rendu -= 10;
        $billets10 ++;

    }
    while ($rendu >= 5){
        $rendu -= 5;
        $billets5 ++;

    }
    while ($rendu >= 2){
        $rendu -= 2;
        $pieces2 ++;

    }
    while ($rendu >= 1){
        $rendu -= 1;
        $pieces1 ++;

    }
   
    echo "Montant à payer : ". $montantAPayer . "€ <br>";
    echo "Montant versé : ". $sommeVerse . "€ <br>";
    echo "Reste à payer : ". $restAPayer . "€ <br>";
    echo "********************************************************** <br>";
    echo "$billets10 billets de 10 € " ."-"."$billets5 billet de 5 € "
    ."-"."$pieces2  pièce de 2 € " ."-". "$pieces1  pièce de 1 € <br>"; 

}

    $montantAPayer = 152;
    $sommeVerse = 200;
   

renduMonnaie($montantAPayer, $sommeVerse);










