<h1>Exercice 11</h1>
<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.
</p>
<h2> Resultat </h2>
<?php

function afficherDateFormate ($dateString){

   // setlocale(LC_TIME, 'fr_FR.utf8', 'fra');

    $date = new DateTime($dateString);

    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL,
     IntlDateFormatter::NONE);

    return $formatter->format($date);
   
   
}
$date = "2018-02-23";
echo afficherDateFormate($date);
