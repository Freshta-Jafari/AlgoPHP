<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
<h1>Exercice 4</h1>
<p>
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/

</p>
<h2> Resultat </h2>
<?php

function afficherPaysCapitales($paysCapitales) {
   ksort($paysCapitales);

    echo "<table border = '1' cellpadding = '10'>";
    echo "<tr>

        <th> No </th>
        <th> Payes </th>
        <th> Capitales </th>
      
        </tr>";

    $index = 1;
    foreach ($paysCapitales as $pay => $capitale) {

        echo "<tr>";

        echo "<td>" . $index . "</td>";
        echo "<td>" . strtoupper($pay) . "</td>";
        echo "<td>" . '<a href = "https://fr.wikipedia.org/wiki/Liste_des_capitales_du_monde"' .
          'target = "_blank">' . urlencode($capitale)  .  '</a>' ."</td>";
       
        echo "</tr>";
        $index++;

    }
    echo "</table>";

}

$paysCapitales = array (
  "France"=>"Paris",
  "Allemagne"=>"Berlin",
  "USA"=>"Washington",
  "Italie"=>"Rome",
  "Espagne"=>"Madrid"
);

afficherPaysCapitales($paysCapitales);