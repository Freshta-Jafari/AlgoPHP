<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
    </head>
<h1>Exercice 15 </h1>
<p>

En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.
</p>
<h2> Resultat </h2>
<?php


$email = "elan@elan-formation.fr";
//$email = "ffff_idnl;od";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse e-mail  $email  est valide.";
} else {
    echo "L'adresse e-mail '$email' n'est pas valide.";
}
