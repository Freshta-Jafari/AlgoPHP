<h1>Exercice 1</h1>
<p>
Créer une fonction personnalisée convertirMajRouge() permettant
 de transformer une chaîne de caractère passée en argument en
  majuscules et en rouge.
</p>
<h2> Resultat </h2>
<?php
function convertMajRouge ($texte){
   $texteMaj = strtoupper($texte);
   return "<span style='color: red;'> $texteMaj </span>";
}
$texte = " Mon texte en parametre";
echo convertMajRouge ($texte);