<h1>Execice 12</h1>
<p>« Notre formation DL commence aujourd'hui » <br>
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG <br>
Variante : trier d’abord le tableau par ordre alphabétique du prénom
</p>
<h2>Resultat</h2>

<?php 

function direBonjour($prenomsLangues){
   

    foreach ($prenomsLangues as $prenoms => $langues){
        switch ($langues){
            case "FAR":
                echo "Salut, $prenoms ! <br>";
                break;
            case "ENG":
                echo "Hello, $prenoms ! <br>";
                break;
            case "ESP":
                echo "Hola, $prenoms ! <br>";
                break;
            default:
            echo "Bonjour, $prenoms ! ";
            break;
        }

    }
}

$prenomsLangues = array(
    "Mickaël"=> "FAR",
    "Virgile"=> "ESP",
    "Marie-Claire"=> "ENG"
);

direBonjour($prenomsLangues);

echo "<b>le tableau par ordre alphabétique du prénom</b> <br>";
ksort($prenomsLangues);
echo direBonjour($prenomsLangues);