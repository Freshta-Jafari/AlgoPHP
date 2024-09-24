<h1>Exercice 5 </h1>
<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.

</p>
<h2> Resultat </h2>
<?php
function afficherFormulaire ($nomsInput){

    echo '<form>
    
    <label> Nom  :</label><br>
    <input type = "texte" name = "nom"><br><br>

    <label> Prénom :</label><br>
    <input type = "texte" name = "prenom"><br><br>

    <label> Ville :</label><br>
    <input type = "texte" name = "ville" >
    
    </form>';
}

$nomsInput = array("Nom", "Prénom", "Ville");
afficherFormulaire("", $nomsInput);