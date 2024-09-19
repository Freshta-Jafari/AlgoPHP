<h1>Execice 8</h1>
<p>« Notre formation DL commence aujourd'hui » <br>

Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :

</p>
<h2>Resultat</h2>

<?php 

function tableMultiplication($nombre){
    $resultats = [];

    for ($i = 0; $i <= 10; $i++){
        $resultats[] = "$nombre * $i = ". ($nombre * $i);
    }
    return $resultats;

}

$nombre = 8;
$table = tableMultiplication($nombre);
echo "<h3> For boucles  <br>";
echo "Table de 8 : <br>";

foreach ($table as $resultat){
    
    echo $resultat . "<br>";
}

function tableMultiplicationWhile($nombre){
    $resultats = [];

    $j = 1;
    while ($j <= 10) {
        $resultats[] = "$nombre * $j = ". ($nombre * $j);
        $j++;
    }
    return $resultats;
}
$nombre = 8;
$table = tableMultiplicationWhile($nombre);
echo "<h3> While boucles  <br>";
echo "Table de 8 : <br>";

foreach ($table as $resultat){
        echo $resultat ."<br>";
}