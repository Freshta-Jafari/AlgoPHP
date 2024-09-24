<h1>Exercice 9</h1>
<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").

</p>
<h2> Resultat </h2>
<?php
function afficherRadioBotoun ($rList, $options){
    
    foreach ($options as $label => $estCoche){
        $checked = ($estCoche) ? 'checked' : '';
        echo '<label>';
        echo '<input type = "radio" name = "les_options" "' . $rList .' [] " value = "' . $label .'"' . $checked . '>';
        echo $label;
        echo '</label></br>';
    }
}

$radioOptions = [
    'Masculin'=> false,
    'Féminin'=> false,
    'Autre'=> true,
];
afficherRadioBotoun ('les_options', $radioOptions);