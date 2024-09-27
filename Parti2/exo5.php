<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
<h1>Exercice 5 </h1>
<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.

</p>
<h2> Resultat </h2>


<?php

function dynamicFormulaire ($elements){
    echo '<div class="form-container">  <form method = "post" action = ""> <h4>Remplir le formulaire  : </h4> ';

    foreach ($elements as $element => $value) {
        echo '<label for = "'. $element .'">' . ucfirst($element) . ' : </label>';
        echo '<input type = "'.$value.'" name = "'.$element.'" id = "'.$value.'">';
        echo '<br><br>';
    }
    echo '<input type = "submit" value = "Envoyer">';
    echo '</div>';
    echo  '</form>';
}

$formulaire  = [
    'Nom'=> 'text',
    'Prénom'=> 'text',
    'Ville'=> 'text',
    'Email'=> 'email',
];
dynamicFormulaire($formulaire );