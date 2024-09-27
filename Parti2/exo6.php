<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
<h1>Exercice 6 </h1>
<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.

</p>
<h2> Resultat </h2>
<?php

function alimenterListDeroulante ($elements, $valeurs, $selectedValue = null){

    echo '<select name = "' . $elements . '">';

   
    foreach ($valeurs as $valeur){

        $selected = ($valeur == $selectedValue) ? 'selected' : '';
        echo '<option value = "' . $valeur . '"' . $selected . '>' . $valeur . '</option>' ;
        
    }
    echo '</select>';
}
$elements = ['Monsieur', 'Madame', 'Mademoiselle'];

alimenterListDeroulante('Sexes', $elements);

