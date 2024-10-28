<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="SESSION.css">
</head>
<body>

<h1>Page d'inscription</h1>

    <form action="traitement.php" method="post">
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prenom">Votre prenom</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="email">Votre email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="mdp">Votre mot de passe</label>
            <input type="password" id="mdp" name="mdp" required>
        </div>
        <input type="submit" id="submit_inscription" name="submit_inscription">
    </form>
<?php
// if (isset($_POST['nom'])) {
//     $_SESSION['nom'] = $_POST['nom'];
//     echo "<p> le nom " . $_SESSION['nom'] . "est dans session</p>";
// } else {
//     echo "<p>" . $_SESSION['nom'] . "n'est pas dans session</p>";
// }
?>

    <!-- Exercice PHP 

Objectif : Créer une page d'inscription et une page pour le traitement, 
           le but sera de pouvoir inscrire un utilisateur et stocker ses informations dans la session

1 . Créer un fichier inscription.php qui contiendra un formulaire basique d'inscription avec les champs (nom,prénom,email,mdp)

2 . Créer un fichier traitement.php qui sera chargé de récupérer et traiter les champs du formulaire 
    grâce à la superglobale $_POST, vérifier que la méthod récupérée est bien POST et que le bouton submit a bien été cliqué.

    Il faudra stocker les informations d'inscription dans $_SESSION après avoir vérifié que tous les champs sont remplis
    avec les conditions suivantes : 

    2.1 . Le nom et prénom ne doivent pas contenir plus de 30 caractères maximum et doivent contenir 2 caractères au minimum
    
    2.2 . Le mot de passe doit contenir au minimum 6 caractères et ne pas dépasser les 20 caractères.

3 . Une fois vérifié, stocker les informations dans la SESSION (utilisez trim() pour virer les espaces que l'utilisateur peut
    sans le vouloir insérer)

4 . Vérifier que les informations sont bien présentes et correcte avec print_r($_SESSION)

5 . Gérer la redirection de l'utilisateur vers la page accueil.php pour lui souhaiter la bienvenue et afficher ses informations. -->

</body>
</html>


 