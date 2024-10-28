<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
    <link rel="stylesheet" href="SESSION.css">
</head>
<body>
    
<?php
var_dump($_POST);
?>
<?php
// if (isset($_POST['nom'])) {
//     $_SESSION['nom'] = $_POST['nom'];
//     echo "<p> le nom " . htmlspecialchars($_SESSION['nom']) . "est dans session</p>";
// } else {
//     echo "<p>" . htmlspecialchars($_SESSION['nom']) . "n'est pas dans session</p>";
// }

// if (isset($_POST['prenom'])) {
//     $_SESSION['prenom'] = $_POST['prenom'];
//     echo "<p> le prenom " . htmlspecialchars($_SESSION['prenom']) . "est dans session</p>";
// } else {
//     echo "<p>" . htmlspecialchars($_SESSION['prenom']) . "n'est pas dans session</p>";
// }

// if (isset($_POST['email'])) {
//     $_SESSION['email'] = $_POST['email'];
//     echo "<p> l'email " . htmlspecialchars($_SESSION['email']) . " est dans session</p>";
// } else {
//     echo "<p>" . htmlspecialchars($_SESSION['email']) . " n'est pas dans session</p>";
// }

// if (isset($_POST['mdp'])) {
//     $_SESSION['mdp'] = $_POST['mdp'];
//     echo "<p> le mdp " . htmlspecialchars($_SESSION['mdp']) . "est dans session</p>";
// } else {
//     echo "<p>" . htmlspecialchars($_SESSION['mdp']) . "n'est pas dans session</p>";
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_inscription'])) {
    // Récupérer et nettoyer les champs du formulaire
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $mdp = trim($_POST['mdp']);

    // Vérifier que tous les champs sont remplis et valides
    if (
        strlen($nom) >= 2 && strlen($nom) <= 30 &&
        strlen($prenom) >= 2 && strlen($prenom) <= 30 &&
        strlen($mdp) >= 6 && strlen($mdp) <= 20
    ) {
        // Stocker les informations dans la session
        $_SESSION['utilisateur'] = [
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
        ];

        // Afficher le contenu de $_SESSION pour vérifier
        print_r($_SESSION);

        // Rediriger l'utilisateur vers la page d'accueil
        header('Location: accueil.php');
        exit();
    } else {
        echo "Les informations fournies ne sont pas valides.";
    }
} else {
    echo "Formulaire non soumis correctement.";
}
?>


</body>
</html>