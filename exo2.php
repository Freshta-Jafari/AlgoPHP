<h1>Execice 2</h1>
<p>« Notre formation DL commence aujourd'hui » <br>
A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.
</p>
<h2>Resultat</h2>

<?php 
$phrase = "Notre formation DL commence aujourd'hui";
$nombre_de_mots = str_word_count($phrase);
echo "La phrase « Notre formation DL commence aujourd'hui » contient : ". $nombre_de_mots . "mots";
