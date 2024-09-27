<h1>PHP Introductions</h1>

<?PHP   

$tableau1 = array("texte 1","texte 2");
$tableau2 = ["phrase 1","phrase 2","phrase 3"];

// Fonctions TABLEAUX
$tailleTableau1 = count($tableau1);
echo "La tableau1 contient  $tailleTableau1 elements <br>";
echo "La tableau2 contient ".count($tableau2)."elements <br>";

// ACCEDER A LA PREMIER VALEUR DU TABLEAU

echo $tableau1[0]."<br>" ;

$Notes = [12,14,9,8,19,17,25];
$nbNotes = count($Notes);
$sommeNotes = array_sum($Notes);
$moyenne = $sommeNotes / $nbNotes;
$moyenne = round($sommeNotes / $nbNotes, 2);
//$moyenne2 = number_format();
echo "La moyenne est $moyenne <br>";

// Operations Mathmatique 
$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "La total HT est de $totalHT euros <br>";

$tauxTVA = 0.20;
$totalTTC = $nbArticles * $prixHT * $nbArticles + $prixHT * $totalTVA;
$totalTTC2 = $nbArticles * $prixHT * $nbArticles *(1 + $tauxTVA);
echo "La total TTC est de $totalTTC euros <br>";


// revoie le type de la variables
echo gettype($texte);

var_dump($texte);
var_dump($tableau1);

// Structure de Controle

// Conditions if else
$prenom = "Freshta";
$age = 25;

if ($age <= 30){
    $resultat = "young";

}else{
    $resultat = "old";
}
echo "$prenom est $resultat <br>";

// Ternaire
$result = $age >= 30 ? "young":"old";
echo "$prenom est $result <br>";
echo "$prenom est ".($age >= 30 ? "young" : "old")."<br>";

// en Fonction de l'age afficher une catagorie

if(gettype($age) == "integer" || gettype($age) == "double"){
if($age > 30){
    $resultat = "Senior";
}else if($age >=20){
    $resultat = "cader";
}else {
    $resultat = "not on range";
}
echo "la personne qui a $age ans est :  $resultat <br>";
}else{
    echo "Veuillez enter un age numerique!!! <br>";
}

// si la valeur est 1 = ok
// si la valeur est 0 = no
// sinon affiher "valeur non gerre"

$valeur =99;
switch($valeur){
    case 0: echo "OK <br>"; break;
    case 1: echo "Non <br>"; break;
    default : echo "Valeur non geree <br>";
}


$age =34;
if(gettype($age) == "integer"|| gettype($age) == "double"){
switch($valeur){
    case $age >= 30 : echo "Senior <br>"; break;
    case $age >= 20: echo "Minior <br>"; break;
    default : echo "Junior <br>";
}
}else{
    echo "Veuillez saisir un age numerique!!! <br>";
}

// Loop = Boucles
// afficher les chiffres de 1 a 10
// For = Pour
 for($i = 1; $i <= 10; $i++){
    echo $i ." "."<br>";
 }

// While = tant que
$j = 1;
while($j <= 10){
    echo $j ." "."<br>";
    $j++;
}

// Foreach
$range = range(1,10);
var_dump($range);

foreach(range(1,10) as $valeur){
    echo $valeur ."<br>";

}

echo "<h3> Methode For</h3>";

$marques = ["Mercedes","BMW","Toyota","Tesla"];
$nbMarques = count($marques);
//var_dump($marques);
for($i = 0; $i < count($marques); $i++){
    echo $marques[$i] ."<br>";
}

echo "<h3> Methode While</h3>";

$i = 0;
while($i < count($marques)){
echo $marques[$i] ."<br>";
$i++;
}

echo "<h3> Methode Foreach</h3>";

 foreach($marques as $marque){
    echo $marque ."<br>";
 }

 // Tableuax Associatifs
 //cle = valeur
 $formateurs = [
    "Stephane" => "Mulhouse",
    "Virgine" => "Strasbourg",
    "Mika" => "Strasbourg",
    "Dominique" => "Colmar"
 ];

 var_dump($formateurs);

 /* ksort  = cle (a to z)
    krsory = cle (z to a)
    asort = valeur (a to z) 
    arsort = valeur (z to a)
*/
 arsort($formateurs);

 foreach($formateurs as $prenom => $ville){
    echo ucfirst($prenom)."habite".mb_strtoupper($ville)."<br>";
 }

$clients = [
    "Stephane" => [
        "Adresse"=> "10 rue de la Gare",
        "CP"=> "67000",
        "Ville"=> "Strasbourg",
        "Tel"=> "0835846853",
    ],

    "Freshta" => [
        "Adresse"=> "5 rue Jacob Mayer",
        "CP"=> "67200",
        "Ville"=> "Strasbourg",
        "Tel"=> "0876746543",
    ],
];
 //var_dump($clients);

//echo $clients["Stephane"]["CP"]." ".$clients["Stephane"]["Ville"];

foreach($clients as $prenom => $coordonnes){
    echo ucfirst($prenom)."  habite  ".$coordonnes["Adresse"]." ".$coordonnes['CP']." ".
    strtoupper($coordonnes["Ville"]) . "  et a comme No de telephone :  ".$coordonnes["Tel"]."<br>";
}

// Fonctions



