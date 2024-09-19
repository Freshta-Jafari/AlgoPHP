<h1>Execice 3</h1>
<p>« Notre formation DL commence aujourd'hui » <br>
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>
<h2>Resultat</h2>

<?php 

$phrase = "Notre formation DL commence aujourd'hui";
$ancienne_phrase = $phrase;
$phrase = str_replace("aujourd'hui","demain", $ancienne_phrase);
echo "Anciene phrase : ".$ancienne_phrase."\n";
echo "Nouvelle phrase : ".$phrase;
