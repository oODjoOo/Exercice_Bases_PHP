<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo_Condition</title>
</head>
<body>

<?php

/** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
 */

    $age = 20;
    if (is_int($age) && $age <= 0 && $age >= 120){
        echo "<p>L'âge n'est pas valide</p>";
    } else {
        echo "<p>L'âge est bien valide</p>";
    }



/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 *  Bonus: trouver comment avoir la moyenne en entier et non en décimal
 */

 $montant = 120;
 if ($montant > 100) {
    echo round($montant *= 0.10);
 } else if ($montant >= 50 && $montant <= 100) {
    echo round($montant *= 0.05);
 } else {
    echo "pas de réduction";
 }


/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 */

 $jour = 2;

 switch ($jour) {
    case 1:
        echo "<p>Aujourd'hui, c'est lundi.</p>";
        break;
    case 2:
        echo "<p>Aujourd'hui, c'est mardi.</p>";
        break;
    case 3:
        echo "<p>Aujourd'hui, c'est mercredi.</p>";
        break;
    case 4:
        echo "<p>Aujourd'hui, c'est jeudi.</p>";
        break;
    case 5:
        echo "<p>Aujourd'hui, c'est vendredi.</p>";
        break;
    case 6:
        echo "<p>Aujourd'hui, c'est samedi.</p>";
        break;
    case 7:
        echo "<p>Aujourd'hui, c'est dimanche.</p>";
        break;
    default:
        echo "<p>Le numéro du jour n'est pas valide. Veuillez entrer un nombre entre 1 et 7.</p>";
        break;
}


/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */

$day1 = "lundi";
$day2 = "mardi";

if ($day1 === $day2) {
    echo '<p>$day1 et day2 sont identique en type et en valeur</p>';
} else {
    echo '<p>$day1 et day2 ne sont pas identique sois en type sois en valeur</p>';
}




/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */
$note1 = 12;
$note2 = 15;
$note3 = 8;

$moyenne = round(($note1 + $note2 + $note3) / 3, 2);

echo $moyenne;

if ($moyenne < 10) {
    echo "<p>Sorry Next time</p>";
} else {
    echo "<p>Et sa passe !</p>";
}





/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */


$var = 0;

if (isset($var)) {
    echo "<p>existe et sa valeur est $var</p>";
} else {
    echo "<p>n'existe pas</p>";
}





/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 *  Pas besoin d'un formulaire, faites juste une variable et tester en changeant les valeurs: string vide, non NULL...
 * 
 */

$nom = "djo";

if (empty($nom)){
    echo "0, donc elle est vide, vraie ou non définie";  
    } else {
        echo "Elle n'est ni vide, elle est fausse et définie";
    }


/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */

if ($note1 % 2 == 0){
    echo '<p>la variable $note1 est pair</p>';
} else {
    echo '<p>la variable $note1 est impair</p>';
}




/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */


$age = 20;

switch($age) {
    case $age < 13 && $age > 0:
        echo "<p>enfant</p>";
        break;
    case $age >=13 && $age < 18:
        echo "<p>adolescent</p>";
        break;
    case $age >= 18 && $age < 70:
        echo "<p>adulte</p>";
        break;
    case $age >= 70:
        echo "<p>senior</p>";
        break;
    default :
        echo "age invalide";
}



/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */

$digital = true;
$mdp = false;

if ($mdp xor $digital) {
    echo 'accès autorisé';
} else {
    echo 'accès refusé, le mdp OU le digital est autorisé';
}




?>
    
</body>
</html>