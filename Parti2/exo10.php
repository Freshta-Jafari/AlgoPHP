<h1>Exercice 10</h1>
<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, 
sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).

</p>
<h2> Resultat </h2>

<div> <h3>D'inscription Formulaire</h3>
    <form method="post" action="">

        <label for="nom"> Nom :</label>
        <input type="texte" id="nom" name="nom" required><br><br>

        <label for="prenom"> Prénom : </label>
        <input type="texte" id="prenom" name="prenom" required><br><br>

        <label for="adresse"> Adresse : </label>
        <input type="texte" id="adresse" name="adresse" required><br><br>

        <label for="email"> Email : </label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="ville"> Ville : </label>
        <input type="texte" id="ville" name="ville" required=""><br><br>

        <label> Sexes : </label><br>
        <?php
            $optionSexes = ['Homme' => false, 'Femme' => false, 'Autre' => false];
            afficherRadioChoix ('sexes', $optionSexes);
        ?><br><br>

        <label for="formation"> Formations : </label><br>
        <?php
        $formations = ['Développeur Logiciel', 'Dsigner Web', 'Intégrateur', 'Chef de projet'];
        afficherCheckbox ('formation', $formations);
        ?><br><br>

        <input type="submit" value="Soumettre">
    </form>
</div>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $email = htmlspecialchars($_POST['email']);
    $ville = htmlspecialchars($_POST['ville']);
    $sexes = isset($_POST['sexes']) ? htmlspecialchars($_POST['sexes']) :'';
    $formations = isset($_POST['formation']) ? htmlspecialchars($_POST['formation']) : '';

    echo '<h3> Informations Soumises : </h3>';
    echo 'Nom : ' . $nom . '</br>';
    echo 'Prenom : ' . $prenom . '</br>';
    echo 'Adresse : ' . $adresse . '</br>';
    echo 'Email : ' . $email . '</br>';
    echo 'Ville : ' . $ville . '</br>';
    echo 'Sexes : ' . $sexes . '</br>';
    echo 'Formation : ' . $formations  . '</br>';
 
}
//Radio Botoun
function afficherRadioChoix ($radioList, $options) {

    foreach ($options as $label => $estCouche) {
        $checked = ($estCouche) ? 'checked' :'';
        echo '<label>';
        echo '<input type ="radio" name = "' . $radioList .'" value = "' . $label .'"' . $checked . '>';
        echo $label;
        echo '</label></br>';
    }
}
// Checkbox
function afficherCheckbox ($checkList, $valeurs, $selecedValue = null){
    echo '<select name="' . $checkList .'">';

    foreach ($valeurs as $valeu){
        $selected = ($valeu == $selecedValue) ? 'selected' : '';
        echo '<option value = "' . $valeu .'"' . $selected . '>' . $valeu . '</option>'; 
       }
       echo '</select>';
}
    





