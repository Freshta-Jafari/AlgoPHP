<h1>Execice 11</h1>
<p>« Notre formation DL commence aujourd'hui » <br>

Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »

</p>
<h2>Resultat</h2>

<?php 
 
 $marques = array("Peugeot", "Renault", "BMW", "Mercedes");

 $nombreMarques = count($marques);
  echo "Il y a $nombreMarques marques de voitures dans le tableau : <br>";

  foreach ($marques as $marque){
    echo $marque."<br>";
  }
  

  