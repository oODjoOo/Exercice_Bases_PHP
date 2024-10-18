<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Boucles</title>
</head>
<body>
<?php

// Afficher toutes les réponses

echo "<h2>Exercice 1 : Boucle while basique</h2>"; 
 /* 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */

$i = 0;
while ($i <= 20 ) {
    if($i % 2 == 0 ) {
        echo $i . '<p>est pair</p>';
    }
    $i++;
}



echo "<h2>Exercice 2 : Générer une liste d'années avec une boucle while</h2>"; 
 /* 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */

 $i = 2000;
 while ($i <= 2024) {
    echo '<ul><li> année: ' . $i . '</li></ul>';
    $i++;
 }



 echo "<h2>Exercice 3 : Boucle do...while</h2>"; 
 /* 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. La variable de départ équivaut à 3
 * 
 * 
 */

$i = 3;
echo " <p>multiple de 3 jusqu'à 30: </p>";
do {
    echo "<p>$i</p>";
    $i += 3;
} while ($i <= 30);


echo "<h2>Exercice 4 : Boucle for</h2>"; 
 /* 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */

for ($i = 0; $i <= 10; $i++){
    echo '<p> ' . 2 . 'x' . $i . ' = ' . 2*$i . '</p>'; 
}


echo "<h2>Exercice 5 : Boucles imbriquées pour créer une grille</h2>"; 
 /* 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 1,1  1,2  1,3  1,4  1,5
 * 2,1  2,2  2,3 ...
 * ...
 * ...
 * ...
 * 5,1  5,2 ...
 */

 echo '<table>';

 // Boucle pour les lignes
 for ($i = 1; $i <= 5; $i++) {
     echo '<tr>';
     
     // Boucle pour les colonnes
     for ($j = 1; $j <= 5; $j++) {
         // Afficher les coordonnées de la cellule
         echo '<td>' . $i . ',' . $j . '</td>';
     }
     
     echo '</tr>';
 }
 
 echo '</table>';


 echo "<h2>Exercice 6 : foreach pour un tableau associatif</h2>"; 
 /* 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */

$tabassoc = [
    'prenom' => '<p>billy</p>',
    'nom'    => '<p>bobby</p>',
    'email'  => '<a href="#">billy@email.com</a>',
    'age'    => '<p>25</p>'
];

var_dump($tabassoc);

foreach($tabassoc as $index) {
    echo $index;
}


echo "<h2>Exercice 7 : Foreach avec des clés personnalisées</h2>"; 
 /*  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */

$tabnav = [
    'accueil'   => 'Accueil',
    'produits'  => 'Produits',
    'contact'   => 'Contact',
];

foreach($tabnav as $linknav) {
    echo "<p><a href='#'>$linknav</a></p>";
}




echo "<h2>Exercice 8 : Boucles imbriquées et conditions</h2>"; 
 /* 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * Regarder random_int pour la génération des nombres aléatoires 
 * 
 * 
 */
echo '<table border = "1">';

for ($i = 0; $i <= 10 ; $i++) {
    echo '<tr>';

    for ($j = 0; $j <= 10; $j++) {
        $randomNumber = random_int(1, 100);
        echo '<td>' . $randomNumber . '</td>';
    }

    echo '</tr>';
}

echo '</table>';








echo "<h2>Exercice 9 : Tableau de tableaux avec foreach</h2>"; 
 /* 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */


$tab_multi = [
    'personne1'  => [
        'prenom'   => 'BOB',
        'nom'      => 'clark',
        'age'      => 22
    ],

    'personne2'  =>[
        'prenom'   => 'crunch',
        'nom'      => 'crash',
        'age'      => 30
    ],

    'personne3'  =>[
        'prenom'   => 'timmy',
        'nom'      => 'dearly',
        'age'      => 60
    ]
];


echo "<ol>";
foreach ($tab_multi as $personne => $key) {

    echo "<li>$personne</li>";
    echo "<ul>";
    foreach ($key as $indice => $value) {
        
    // var_dump($tab_multi) ;
    
    echo "<li>" . $indice . ": " . $value . "</li>";
    
    
    }
    echo "</ul>";
}
echo "</ol>";



// echo '<ul>';
//     echo "personne1 :";
//     foreach ($tab_multi['personne1'] as $personne1 => $value) {
//         echo  '<li>' . $personne1 . ": " . $value . '</li>';
//     }
    
    
//     echo "personne2 :";
//     foreach ($tab_multi['personne2'] as $personne2 => $value) {
//         echo '<li>' . $personne2 . ": " . $value . '</li>';
//     }
    
//     echo "personne3 :";
//     foreach ($tab_multi['personne3'] as $personne3 => $value) {
//         echo '<li>' . $personne3 . ": " . $value . '</li>';
//     }

//     echo '</ul>';


// $multi = [
//     'person' => [
//     'firstname' => 'arthur',
//     'name' => 'minimoys',
//     'age' => 12,
//     ],

//     'person2' => [
//     'firstname' => 'betrand',
//     'name' => 'quiramme',
//     'age' => 27,
//     ],

//     'person3' => [
//         'firstname' => 'jean',
//         'name' => 'naimarre',
//         'age' => 58,
//         ],

//  ];
// echo "<ol>";
//  foreach($multi as $index => $valeur) {
//  echo "<li>$index</li>";
//  echo "<ul>";
//  echo "<li>" . $multi[$index]['firstname'] . "</li>";
//  echo "<li>" . $multi[$index]['name'] . "</li>";
//  echo "<li>" . $multi[$index]['age'] . "</li>";
//  echo "</ul>";
//  } 
// echo "</ol>";

?>
</body>
</html>