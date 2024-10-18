<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Tableaux PHP</title>
</head>
<body>
<?php

echo "<h2>Exercice 1 : Créer un tableau simple</h2>";
 /*  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les titres des films.
 *  Affichez chaque film sur une ligne séparée dans un var_dump().
 */

 $tab = ['ready player one','star wars','indiana jones','predator','forrest gump'];
 var_dump($tab);



echo "<h2>Exercice 2 : Ajouter et supprimer des éléments d'un tableau</h2>";
 /*   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
 *   Affichez le tableau modifié.
 */

$fruits = ['mangue','banane','pomme'];
$fruits[] = 'poire';

unset($fruits[0]);
var_dump($fruits);




echo "<h2>Exercice 3 : Créer et afficher un tableau associatif</h2>";
 /*   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */

$info = [
    'prénom' => 'Bob, ',
    'nom' => 'Billy, ',
    'âge' => 23
];

echo 'le prénom: ' . $info['prénom'] . 'Le nom: ' . $info['nom'] . 'et l\'âge: ' . $info['âge'] . 'ans.';






echo "<h2>Exercice 4 : Compter les éléments d'un tableau</h2>";
 /*  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */

$villes = ['paname','gonesse','le plessis'];
echo '<p>Le tableau contient ' . count($villes) . ' éléments</p>';





echo "<h2>Exercice 5 : Créer un tableau multidimensionnel</h2>";
 /*   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */

$tab_multi = [
    0 => [
        'prénom' => 'Piff',
        'nom'    => 'Poff',
        'note'   => 15
    ],
    1 => [
        'prénom' => 'Tip',
        'nom'    => 'Top',
        'note'   => 16
    ],
    2 => [
        'prénom' => 'clint',
        'nom'    => 'eastwood',
        'note'   => 17
    ]
];

echo 'la note du premier étudiant est de: ' . $tab_multi[0]['note'];






echo "<h2>Exercice 6 : Modifier un tableau multidimensionnel</h2>";
 /*   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */


 $tab_multi[0]['note'] = 18;
 var_dump($tab_multi);





echo "<h2>Exercice 7 : Boucle for pour parcourir un tableau</h2>";
 /*   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */

$month = ['janvier','fevrier','mars','avril','mai','juin','juillet'];
var_dump($month);

for ($i = 0 ; $i < count($month); $i++) {
    echo ' ' . $month[$i];
}




echo "<h2>Exercice 8 bonus : Rechercher une valeur dans un tableau</h2>";
 /*   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
 *   Affichez un message en fonction du résultat de la recherche.
 */

$number = [12,1,2,5,87,65,45];
$thenumber = 12;
if (in_array($thenumber ,$number)) {
    echo '<p>ce numéro ' . $thenumber . ' existe</p>';
} else {
    echo '<p>ce numéro ' . $thenumber . ' n\'existe pas</p>';
}




echo "<h2>Exercice 9 : Fusionner deux tableaux (Bonus)</h2>";
 /*   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 * 
 *  Aide: utiliser des boucles for
 */

$prenom = ['tim','jirry','dog'];

$nom = ['wy','lee','snoop'];

$both = [];

for ($i = 0; $i < count($prenom); $i++) {
    $both[] = $prenom[$i] . ' ' . $nom[$i];
 }


 foreach ($both as $nomprenom) {
    echo $nomprenom . '<br>';
}

?>
</body>
</html>