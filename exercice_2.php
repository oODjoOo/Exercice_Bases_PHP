<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice_2</title>
</head>
<body>
    
<?php

    $nom = "jean";
    $prenom = "yves";

    echo $nom ." ". $prenom;

    $phrase1 = "le ciel est";
    $phrase2 = "bleu aujourd'hui";

    echo "<p>$phrase1 $phrase2</p>";

    $mot1 = "j'aime ";
    $mot2 = "le ";
    $mot3 = "PHP";

    echo $mot1, $mot2, $mot3;

?>

<?php

    echo "<br>";
    echo "<br>";

    $texte = "je vais ";

    echo $texte .= "à la plage";

    echo "<br>";
    echo "<br>";

    $guillemets = 'Il a dit : "Le PHP est fantastique"';

    echo $guillemets;

    echo "<br>";
    echo "<br>";

    $mot = "PHP";

    echo "le mot est : $mot";

    echo "<br>";
    echo "<br>";

    echo 'le mot est : $mot';

    echo "<br>";
    echo "<br>";

    $nom = "djo";

    echo "Bonjour ", $nom, " bienvenue sur notre site!";

    echo "<br>";
    echo "<br>";

    $citation = '"la vie est belle';

    echo $citation . ', surtout quand on code en PHP!"';


?>


</body>
</html>