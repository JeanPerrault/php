<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revisions PHP</title>

    <style>

    </style>

</head>
<body>

    <h1>Révision PHP</h1>

    <h2>Les variables</h2>
    <?php
    // declarer une variable de type STRING
        $var_string = "String";
    // declarer une variable de type INTEGER
        $var_integer = 42;
    // declarer une variable de type BOOLEAN
        $var_boolean = true;
    // afficher le debug de ses 3 variables
    ?>
    <div>
        variable de type STRING : <?php var_dump($var_string) ?>
    </div>
    <div>
        variable de type INTEGER : <?php var_dump($var_integer) ?>
    </div>
    <div>
        variable de type BOOLEAN : <?php var_dump($var_boolean) ?>
        variable de type BOOLEAN : <?= $var_boolean ?><br>
    </div>

    <h2>Les tableaux</h2>

    <h3>tableau numerique</h3>
    <?php
    // déclarer le tableau 'planets' et ajouter les planetes du systele solaire
    // Mercure, Vénus, Terre, Mars, Jupiter, Saturne, Uranus, Neptune
    
    $planets=["Mercure", "Vénus", "Terre", "Mars", "Jupiter", "Saturne", "Uranus", "Neptune"];
    
    ?>
    <div>
        Liste des planetes : <?php var_dump($planets) ?>
        <pre><?php print_r($planets) ?></pre>
    </div>
    <div>
        <!-- recupere la planete dont l indice est 2 -->
        Notre planete est la <?= $planets[2] ?> 
    </div>
    <div>
        <!-- end = pour recuperer la dereniere valeur du tableau -->
        La derniere planete de notre systeme solaire est : <?= end($planets) ?>
    </div>

    <h2>Les boucles</h2>
    <h3>Le foreach</h3>
    <?php
    // boucle sur la liste des planetes et affiche le nom de chaque planete  et 
    // leur position dans le systeme solaire
    foreach($planets as $key => $planet){  // $key est l indice dans le tableau
         echo $planet ." est la planete numero ".($key+1)." dans le systeme solaire.<br>";
    }
    ?>

    <h3>tableau Associatif</h3>
    <?php
        // declarer un tableau associatif 'user'
        // Nom: Wayne, Prénom: Bruce, Age: 35
        $user=[
            "lastname" => "Wayne",
            "firstname" => "Bruce",
            "age" => 35
        ];
        var_dump($user);

    ?>
    <?= $user["firstname"]." ".$user["lastname"]." à ".$user["age"]. " ans" ?>

    <h3>Tableau MultiDimentionnel</h3>









    
</body>
</html>