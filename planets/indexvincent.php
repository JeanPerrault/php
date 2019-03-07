<?php
include_once "connectdb.php";

$sql = "SELECT t1.nom as nom_planet,t1.picture as planete_picture,
t1.types as planete_type, t1.Distance as planete_distance,t1.Goldilocks as planete_goldilocks,
t2.satelite as nom_satelite from tbl_planetes as t1 inner join tbl_satelite as t2 on t2.id_planete = t1.id";

$q=$db-> query($sql);

// var_dump($q);
$planetes = $q-> fetchAll(PDO::FETCH_ASSOC);
// var_dump($planetes);


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Le système Solaire</h1>

    <div class="row">
    <?php foreach  ($planetes as $planet):?>
            <div class="col-4 offset-4">
            
                    <article>
                        <h3>Name: <?= $planet["nom_planet"]?></h3>
                        <img src= <?= $planet["planete_picture"]?> alt="Image de la planète"<?= $planet["nom_planet"]?>>
                        <div>Distance :<?= number_format($planet["planete_distance"],0,"."," ")?> km</div>
                        <div>Type : <?= $planet["planete_type"]?></div>
                        <div>Boucle d'or ? :<?= ($planet["planete_goldilocks"] == true )? "oui" : "Non"?></div>
                        <div>Ses satélite(s) :<?= ($planet["nom_satelite"]) ?></div>
                    </article>
                   
            </div>
            
            <?php endforeach; ?> 
    </div>
    
     

</body>
</html>