<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice_1</title>
</head>
<body>

<?php

    echo "Hello World, Bienvenue sur mon premier script PHP";


?>

<?php
// echo est une instruction qui peut prendre plusieurs paramètre et de les afficher sur le navigateur

    echo "<p>Bonjour tout le monde !</p>";

// print est une instruction qui prend 1 paramètre et de l'afficher sur le navigateur

    print "<p>Aujourd'hui, nous sommes le (date d'aujourd'hui + mois d'aujourd'hui)</p>";

    /*
    echo prend plusieurs paramètre 
    alors que print n'en prend que 1 seul
    */

    /* La différence entre echo et print est minime,
  
    echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
    quelques mots" et ne retourne rien)
    
    print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
    true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
    valeur de vraioufaux sera true (1));
    */
?>

<h1>code de démarrage HTML</h1>

<?php

    echo "<p>Ce texte est affiché depuis PHP</p>";

    $nombre = 120;

    $str = "je suis une string";

    var_dump($nombre);

    var_dump($str);

    echo "Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>";


    // avec echo j'affiche sur le navigateur 
    echo("<div>
     <h1>Bienvenue</h1>
     <h2> sur mon application </h2>
    </div>");

?>
<?php

$today = date("m.d.y");

      echo "<h1>Voici mon h1</h1>
        <h2>Voici mon h2</h2>
        <p> date d'aujourd'hui: $today</p>";

$message = "Et voila le message";

echo "<h1>$message</h1>"

?>




    
</body>
</html>