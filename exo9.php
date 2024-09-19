<h1>Execice 9</h1>
<p>« Notre formation DL commence aujourd'hui » <br>

Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).

</p>
<h2>Resultat</h2>

<?php 

function estImposable($age, $sexe){

    if (($sexe === "F" && $age >= 18 && $age <= 35) || ($sexe === "H" && $age > 20)){
        return "Imposable";
    }else{
        return "Non Imposable";
    }

}

$age = 32;
$sexe = "F";

$resultat = estImposable($age, $sexe);
echo "Age : ". $age ."<br>"."Sexe : ".$sexe."<br>"."La personne est ". $resultat;
