<?php


echo "<h2> Exercice 1 : Affichage des paramètres</h2>";
 /* 
 *  Objectif : Afficher tous les paramètres passés dans l'URL
 * 
 * 
 *  1 . En gardant la page de rendu HTML, utiliser les informations de cette page pour les passer en paramètres d'URL
 * 
 *  2 . Dans ce second fichier nommé : traitement.php, $_GET doit être récupéré, vérifié et ses paramètres affichés sur le navigateur 
 * 
 */
            
echo $_GET['article'];
echo $_GET['couleur'];
echo $_GET['prix'];
var_dump($_GET);






echo "<h2> Exercice 2 : Validation des paramètres</h2>";
 /* 
 *  Objectif : Valider les paramètres reçus dans l'URL et afficher un message d'erreur si un paramètre est manquant
 * 
 *  1 . S'assurer que les paramètres article,couleur et prix sont présents dans l'URL
 * 
 *  2. Si un ou plusieurs paramètres manquent, afficher un message d'erreur spécifique pour chacun
 * 
 *  Exemple : "<p> Le paramètre 'Article' est manquant'"
 */


 if (isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) {  // si existent les indices "article" et "couleur" et "prix", alors on peut afficher leur valeur :
    echo '<div class="details">';
    echo '<h1>Détail du produit</h1>';
    echo '<p>Article : ' . htmlspecialchars($_GET['article']) . '</p>';
    echo '<p>Couleur : ' . htmlspecialchars($_GET['couleur']) . '</p>';
    echo '<p>Prix : ' . htmlspecialchars($_GET['prix']) . '€</p>';
    echo '</div>';
} else {
    // sinon, on met un message à l'internaute :
    echo '<p class="error">Cet article n\'existe pas !</p>';
}





echo "<h2> Exercice 3 : Conversion du prix</h2>";
 /* 
 *  Objectif : Convertir le prix reçu dans l'URL de dollars à euros (utiliser le taux de conversion de 1 dollar = 0.92 euros)
 * 
 *  1 . Récupérer le dollars passé dans l'URL
 * 
 *  2 . Convertir en euros
 * 
 *  3 . Afficher le prix converti
 */


 echo "<p>" . $_GET['prix'] . "</p>";

 $_GETconverse = $_GET['prix'] * 0.92;

 echo "<p>pour " . $_GET['prix'] . "$ on a: " . $_GETconverse . "€</p>";




echo "<h2> Exercice 4 : Affichage d'un message personnalisé</h2>";
 /* 
 *  Objectif : Afficher un message personnalisé en fonction de la couleur passée dans l'URL
 * 
 *  1 . Récupérer la couleur passée dans l'URL
 * 
 *  2 . Afficher un message en fonction de la couleur ( exemple si couleur jaune : "<p> Cette couleur me fait penser au soleil ! </p>)
 * 
 */

if ($_GET['couleur'] === "bleu") {
    echo "<p>" . $_GET['couleur'] . " comme le ciel</p>";
}else {
    echo "";
}

if ($_GET['couleur'] === "rouge") {
    echo "<p>" . $_GET['couleur'] . " comme le sang</p>";
}else {
    echo "";
}

if ($_GET['couleur'] === "blanc") {
    echo "<p>" . $_GET['couleur'] . " comme la neige</p>";
}else {
    echo "";
}



echo "<h2> Exercice 5 : Vérification du prix minimum</h2>";
 /* 
 *  Objectif : Vérifier si le prix reçu dans l'URL est supérieur à un montant minimum et afficher un message appriprié
 * 
 *  1 . Déclarer un prix minimum (20 par exemple)
 * 
 *  2 . Comparer le prix reçu dans l'URL avec le prix minimum
 * 
 *  3 . Afficher un message indiquant si le prix est suffisant ou non 
 */

 $prixmini = 20;

if ($_GET['prix'] >= $prixmini) {
    echo "on est au dessus du minimum requis";
} else {
    echo "on est en dessous du minimum requis";

}

?>
