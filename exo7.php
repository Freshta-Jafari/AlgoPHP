<h1>Execice 7</h1>
<p>« Notre formation DL commence aujourd'hui » <br>

Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans <br>
Pupille : entre 8 et 9 ans <br>
Minime : entre 10 et 11 ans <br>
Cadet : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser.
</p>
<h2>Resultat</h2>

<?php 

function determinerCategorie($age){

    if ($age >= 12) {
        return "Cadet";
    } elseif ($age >= 10) {
        return "Minime";
    } elseif ($age >= 8) {
        return "Pupille";
    } elseif ($age >= 6) {
        return "Poussin";

    }else {
        return "Catégorie non gérée";
    }

}

$age = 10;
echo "L’enfant qui a 10 ans appartient à la catégorie << ". determinerCategorie($age). " >>";


