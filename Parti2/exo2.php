<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
<h1>Exercice 2</h1>
<p>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
</p>
<h2> Resultat </h2>
<?php
function afficherTableHTML($capitales){
    
    ksort($capitales);

    echo"<table border='1' cellpadding='10'>";
    echo"<tr>
        <th>No</th>
        <th>Payes</th>
        <th>Capitales</th>
        </tr>";

    $index = 1;
    foreach($capitales as $pays => $capitale ){
        echo "<tr>";
        echo "<td>". $index."</td>";
        echo "<td>" . strtoupper($pays) . "</td>";
        echo "<td>" . $capitale . "</td>";
        echo "</tr>";
        $index++;

    }
    echo "</table>";
}
$capitales = [
    "France" =>  "Paris",
    "Allemagne" => "Berlin",
    "Italie" => "Rome",
    "USA" =>"Washington"
];

afficherTableHTML($capitales);