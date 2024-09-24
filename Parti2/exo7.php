<h1>Exercice 7 </h1>
<p>
Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.

</p>
<h2> Resultat </h2>
<?php

function afficherCheckbox ($chList, $options){
    
    foreach ($options as $label => $estCoche){
        $checked = ($estCoche) ? 'checked' : '';
        echo '<label>';
        echo '<input type = "checkbox" name = "les_options" "' . $chList .' [] " value = "' . $label .'"' . $checked . '>';
        echo $label;
        echo '</label></br>';
    }
}

$checkboxOptions = [
    'Choix 1'=> false,
    'Choix 2'=> true,
    'Choix 3'=> false,
];
afficherCheckbox ('les_options', $checkboxOptions);
