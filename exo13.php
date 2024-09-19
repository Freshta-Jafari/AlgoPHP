<h1>Execice 13</h1>
<p>« Notre formation DL commence aujourd'hui » <br>

Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.

</p>
<h2>Resultat</h2>

<?php 

$notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
    echo "Les notes obtenues par l’élève sont : ";
foreach ($notes as $note){
    echo $note . " ";
}

function calculerMoyenne($notes){
    $somme = array_sum($notes);

    $nombreNotes = count($notes);


    if ($nombreNotes > 0){
        $moyenne = $somme / $nombreNotes;
        return round($moyenne,2);
    }
    else{
        return 0;
    }
}


$moyenneGenerale = calculerMoyenne($notes);
echo "<br> Sa moyenne générale est donc de : " . number_format($moyenneGenerale,2) ."<br>";