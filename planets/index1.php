<?php

/**
 * 1. definition ds infos de BDD
 */
// nom du serveur BDD
$db_host = "127.0.0.1"; // ou "localhost"
// port de BDD
$db_port = "3306";
// nom uilisateur de BDD
$db_user = "root";
// mot de passe de l utilisateur de BDD
$db_pass = "";
// nom de la base de donnees
$db_schema = "planete";
// Type de la BDD
$db_type = "mysql";
/**
 * 2. connexion a la BDD
 */
$db_info = "$db_type:host=$db_host;dbname=$db_schema;charset=utf8";
    try {
        $db = new PDO($db_info, $db_user, $db_pass);
    } catch (PDOException $e) {
        echo $e-> getMessage();
        die(); // le programme s arrete ici
    }

    $sql = 
    "SELECT 
        t1.id AS id_planet,
        t1.nom AS nom_planet,
        t1.picture AS picture_planet,
        t1.type AS type_planet,
        t1.goldilocks AS goldilocks_planet,
        t1.distance AS distance_planet,
        t2.name AS nom_satelite
    FROM 
        table_planete AS t1
        INNER JOIN satelites AS t2 ON t2.id_table_planete = t1.id";// order by t1.nom asc";
    $q = $db->query($sql);
    $planetsmodel = $q->fetchALL(PDO::FETCH_ASSOC);


    $pageTitle = "Le Système Solaire";

    $planets = [];

    // Re-construction de la liste des planetes
    foreach ($planetsmodel as $planet) 
    {
        if (!isset($planets[ $planet['id_planet'] ])) 
        {
            $planets[ $planet['id_planet'] ] = [];
        }
        
        $planets[ $planet['id_planet'] ]['id'] = $planet['id_planet'];
        $planets[ $planet['id_planet'] ]['nom'] = $planet['nom_planet'];
        $planets[ $planet['id_planet'] ]['picture'] = $planet['picture_planet'];
        $planets[ $planet['id_planet'] ]['type'] = $planet['type_planet'];
        $planets[ $planet['id_planet'] ]['goldilocks'] = $planet['goldilocks_planet'];
        $planets[ $planet['id_planet'] ]['distance'] = $planet['distance_planet'];

        if (!isset($planets[ $planet['id_planet'] ]['satelites'])) {
            $planets[ $planet['id_planet'] ]['satelites'] = [];
        }

        array_push($planets[ $planet['id_planet'] ]['satelites'], $planet['nom_satelite']);
    }    
    
 ?>


<div class="container">
<div class="row">
    <div class="col-12">

        <h2><?= $pageTitle ?></h2>

       
        <div class="row">
            <?php foreach($planets as $planet): ?>
                <article>
                    <h3><?= $planet['nom'] ?></h3>
                    <img src=<?= $planet['picture'] ?> alt=<?= $planet['nom'] ?>>
                    <div>Type : <?=$planet["type"]?></div>
                    <div>Boucle d'or ? : <?= ($planet["goldilocks"]==1) ? "Oui" : "Non" ?></div>
                    <div>Distance : <?=$planet["distance"]?></div>
                    <div>Satellite(s) : <?= join(", ",$planet["satelites"]) ?></div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</div>
</div>

