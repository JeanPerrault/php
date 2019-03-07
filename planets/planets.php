<?php
// Déclaration du tableau $planets
// Nom : Chaine
// Photo : Chaine
// Type : Chaine
// Goldilocks : Booléen
// Distance : Entier
// Satelites : Tableau
$planets=[
    //Mercure
    /* 0 */[
        "nom" => "Mercure",
        "photo" => "mercury.jpg",
        "type" => "Tellurique",
        "goldilock" => false,
        "distance" => 57900000,
        "satellites" => []
        ], 
    //Vénus
    /* 1 */[
        "nom" => "Vénus",
        "photo" => "venus.jpg",
        "type" => "Tellurique",
        "goldilock" => false,
        "distance" => 108000000,
        "satellites" => []
        ],    
    //Terre
    /* 2 */[
        "nom" => "Terre",
        "photo" => "earth.jpg",
        "type" => "Tellurique",
        "goldilock" => true,
        "distance" => 149600000,
        "satellites" => ["Lune"]
        ],    
    //Mars
    /* 3 */[
        "nom" => "Mars",
        "photo" => "mars.jpg",
        "type" => "Tellurique",
        "goldilock" => true,
        "distance" => 228000000,
        "satellites" => ["Phobos", "Deimos"]
        ],    
    //Jupiter
    /* 4 */[
        "nom" => "Jupiter",
        "photo" => "jupiter.jpg",
        "type" => "Géante Gazeuse",
        "goldilock" => false,
        "distance" => 778000000,
        "satellites" => ["Europe", "Ganymède", "Io", "Calisto", "Amalthée", "Adrastée"]
        ],    
    //Saturne
    /* 5 */[
        "nom" => "Saturne",
        "photo" => "saturn.jpg",
        "type" => "Géante Gazeuse",
        "goldilock" => false,
        "distance" => 1430000000,
        "satellites" => ["Encelade", "Titan", "Dioné", "Mimas", "Japet", "Téthys", "Rhéa", "Hypérion", "Phoebé", "Epiméthée", "Pan", "Télésto", "Pollux", "Janus", "Prométhée"]
        ],    
    //Uranus
    /* 6 */[
        "nom" => "Uranus",
        "photo" => "uranus.jpg",
        "type" => "Tellurique",
        "goldilock" => false,
        "distance" => 2870000000,
        "satellites" => []
        ],    
    //Neptune
    /* 7 */[
        "nom" => "Neptune",
        "photo" => "neptune.jpg",
        "type" => "Tellurique",
        "goldilock" => false,
        "distance" => 4500000000,
        "satellites" => []
        ],    
    
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le système Solaire</title>

    <style>
        body {
            background-color: #000;
            color: #FFF;
        }
        h1 {
            color: yellow;
        }
        h3 {
            color: #F00;
        }
    </style>
</head>
<body>
    
    <h1>Le système Solaire</h1>

    <?php foreach($planets as $key => $planet):?>
        <article>
            <h3><?=$planet['nom']?></h3>
            <img src=<?=$planet["photo"]?> alt=<?=$planet["nom"]?>>
            <div>Distance : <?=$planet["distance"]?></div>
            <div>Type : <?=$planet["type"]?></div>
            <div>Boucle d'or ? : <?= ($planet["goldilock"]==true) ? "Oui" : "Non" ?></div>
            <div>Satellite(s) : <?= join(", ",$planet["satellites"]) ?></div>
        </article>
    <?php endforeach; ?>
</body>
</html>
