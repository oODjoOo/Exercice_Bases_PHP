<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)
echo "<p>Exercice 1 : Validation de formulaire</p>"; 
 /* 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 * 
 */

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $motdepasse = htmlspecialchars($_POST['motdepasse']);
    $ville = htmlspecialchars($_POST['ville']);
    $pays = htmlspecialchars($_POST['pays']);

    echo "<h2>Données soumises :</h2>";
    echo "Nom : $nom<br>";
    echo "Prénom : $prenom<br>";
    echo "Email : $email<br>";
    echo "Mot de passe : $motdepasse<br>";
    echo "Ville : $ville<br>";
    echo "Pays : $pays<br>";
} else {
    echo "Aucune donnée reçue.";
}



echo "<p>Exercice 2 : traitement et affichage sécurisé</p>"; 
 /* 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $motdepasse = htmlspecialchars($_POST['motdepasse']);
    $ville = htmlspecialchars($_POST['ville']);
    $pays = htmlspecialchars($_POST['pays']);


    
    echo "<h2>Données soumises :</h2>";
    echo "Nom : $nom<br>";
    echo "Prénom : $prenom<br>";
    echo "Email : $email<br>";
    echo "Mot de passe : $motdepasse<br>";
    echo "Ville : $ville<br>";
    echo "Pays : $pays<br>";
} else {
    echo "<p></p>"; echo "Aucune donnée reçue.";
}





echo "<p>Exercice 3 : Afficher les données précédentes</p>"; 
 /* 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */






echo "<p>Exercice 4 : Limitation de longueur pour adresse</p>";  
 /* 
 *  Objectif : Limiter la longueur de l'adresse saisie par l'utilisateur à 200 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ adresse
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 * Ne pas oublier de réactiver la partie action pour qu'il redirige la requête sur cette page
 */







echo "<p>Exercice 5 : Conversion de données</p>"; 
 /* 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */

 ?>

