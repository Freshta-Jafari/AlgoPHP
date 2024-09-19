<h1>Execice 4</h1>
<p>« Notre formation DL commence aujourd'hui » <br>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.

</p>
<h2>Resultat</h2>

<?php 
 function estPalindrome($phrase){
    $phrase = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($phrase));
    $phrase_inversee = strrev($phrase);

    return $phrase === $phrase_inversee;

 }

 $phrase = " Engage le jeu que je le gagne";

 if (estPalindrome($phrase)) {
    echo "La phrase « Engage le jeu que je le gagne » est palindrome";

 }else{
    echo "La phrase n'est pas un palindrome.";
 }


