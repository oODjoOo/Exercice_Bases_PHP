<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo_Arithmétique</title>
</head>
<body>

<?php

    

echo "<p>Exercice 1 : Opérateurs de base</p>";
 /*  Objectif : calculer des variables avec les opérateurs de base
 * 
 * 1 . Déclarer deuxvariables $a et $b avec des valeurs de votre choix (int)
 * 
 * 2 . Utilisez les opérateurs arithmétiques pour calculer les variables avec les opérateurs suivants (addition +, soustraction -, multiplication * , division / et modulo %), puis afficher le résultat
 */


    $a = 20;
    $b = 10;

    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>';
    echo '<br>';

 echo "<p>Exercice 2 : Opération combinées</p>";
 /*  Objectif : calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=)
 */

    echo $a += $b;
    echo '<br>';
    echo $a -= $b;
    echo '<br>';
    echo $a *= $b;
    echo '<br>';
    echo $a /= $b;
    echo '<br>';
    echo $a %= $b;
    echo '<br>';
    echo '<br>';


echo '<p>Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)</p>';
 /* Objectif : Calculer une variable avec l'incrémentation et la décrémentation en préfixe
 *
 * 1 . Déclarer une variable $counter initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . Réinitialiser $counter à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

    $counter = 10;
    echo $counter;
    echo '<br>';
    ++$counter;
    echo $counter;
    echo '<br>';
    $counter = 10;
    echo $counter;
    echo '<br>';
    --$counter;
    echo $counter;
    echo '<br>';
    echo '<br>';



 echo "<p>Exercice 4 : Incrémentation et décrémentation</p>"; 
 /* Objectif : Calculer une variable avec l'incrémentation et la décrémentation en postfixe
 * 
 * 1 . Déclarer une variable $num initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . réinitialiser $num à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

    $num = 10;
    echo $num;
    echo '<br>';
    $num++;
    echo $num;
    echo '<br>';
    $num = 10;
    echo $num;
    echo '<br>';
    $num--;
    echo $num;
    echo '<br>';
    echo '<br>';



echo "<p>Exercice 5 : Calcul des Ages</p>";
 /*  Objectif : Simuler un anniversaire
 * 
 * 1 . Déclarer une variable $age initialisée à votre age;
 * 
 * 2 . Simuler le passage d'une année en incrémentant votre âge de 1; 
 * 
 * 3 . Remontez le temps et réduisez votre âge pour revenir à son état d'origine (postfixe)
 */

    $age = 32;
    echo $age;
    echo '<br>';
    $age++;
    echo $age;
    echo '<br>';
    $age--;
    echo $age;
    echo '<br>';



echo "<p>Exercice 6 : Modulo</p>";
 /*  Objectif : Calculer avec l'opérateur modulo
 * 
 * 1 . Déclarer une variable $total initialisée à 37;
 * 
 * 2 . Utiliser l'opérateur modulo pour vérifier si $total est pair ou impair
 * 
 * 3 . Afficher un message qui dit si $total est pair ou impair
 * 
 */

    $total = 37;
    if ($total % 2 == 0) {
        echo '<p>$total est pair</p>';
    } else {
        echo '<p>$total est impair</p>';
    }



echo "<p>Exercice 7 : Panier d'achats</p>"; 
 /*  Objectif : Gérer les quantités d'un panier d'articles
 * 
 *  1 . Déclarer une variabler $quantity initialisée à 5;
 * 
 *  2 . L'utilisateur ajoute 3 articles à son panier, la quantité augmentera donc de 3;
 * 
 *  3 . L'utilisateur change d'avis sur 2 des articles et décide de les retirer
 * 
 * Afficher le résultat
 */

    $quantity = 5;
    echo $quantity;
    echo '<br>';
    
    $quantity += 3;
    echo $quantity;
    echo '<br>';

    $quantity -= 2;
    echo $quantity;
    echo '<br>';
    echo '<br>';
    





echo "<p>Exercice 8 : Conversion d'unités</p>";
 /*  Objectif : Convertir des KM en Miles
 * 
 *  1 . Déclarer une variable $kilometres initialisée à 100;
 * 
 *  2 . Convertir les KM en miles (1km = environ 0.621371), le calcul sera donc $kilometres * 0.621371
 * 
 */

    $kilometres = 100;
    echo $kilometres;
    echo '<br>';
    $miles = $kilometres * 0.621371;
    echo $miles;
    echo '<br>';
    echo '<br>';


echo '<p>Exercice 9 : Jeu</p>';
/*  Objectif : Calculer les points dans un jeu en incrémentant et décrémentant
 * 
 *  1 . Déclarer une variable $score initialisée à 50;
 * 
 *  2 . Ajouter 10 points à $score;
 * 
 *  3 . Retirer 5 points à score
 */


    $score = 50;
    echo $score;
    echo '<br>';
    $score += 10;
    echo $score;
    echo '<br>';
    $score -= 5;
    echo $score;


?>
    
</body>
</html>