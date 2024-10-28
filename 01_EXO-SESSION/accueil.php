<?php session_start(); ?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="SESSION.css">
</head>
<body>
    <?php
if (isset($_SESSION['utilisateur'])) {
    $nom = htmlspecialchars($_SESSION['utilisateur']['nom']);
    $prenom = htmlspecialchars($_SESSION['utilisateur']['prenom']);
    $email = htmlspecialchars($_SESSION['utilisateur']['email']);

    echo "<h2>Bienvenue, $prenom $nom !</h2>";
    echo "<p>Votre adresse email : $email</p>";
} else {
    echo "Aucune information utilisateur trouvée.";
}
?>
</body>
</html>