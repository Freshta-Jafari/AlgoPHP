<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "CSS.css">
        
    </head>
<h1>Exercice 8 </h1>
<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>
<h2> Resultat </h2>
<?php
function afficherImageNFois ($urImage, $nombreFois){

    for ($i = 0; $i < $nombreFois; $i++) {
        echo '<img src = "' . $urImage .'" alt = "Image' . ($i + 1) .'" style = "style="margin:10px">';

    }
}
$urImage = 'http://my.mobirise.com/data/userpic/764.jpg';
afficherImageNFois($urImage, 3);