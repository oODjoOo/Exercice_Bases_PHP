<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrulaire 2</title>
</head>

<body>
    <h1>Formulaire 2</h1>
    <form method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br><br>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>

        <label for="pays">Pays :</label>
        <input type="text" id="pays" name="pays" required><br><br>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" maxlength="200" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adresse = $_POST['adresse'];
        $adresseLength = strlen($adresse);
        $ville = strtoupper($_POST['ville']);

        echo "<h2>Données soumises :</h2>";
        echo "Nom : " . htmlspecialchars($_POST['nom']) . "<br>";
        echo "Prénom : " . htmlspecialchars($_POST['prenom']) . "<br>";
        echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Mot de passe : " . htmlspecialchars($_POST['motdepasse']) . "<br>";
        echo "Ville : " . htmlspecialchars($ville) . "<br>";
        echo "Pays : " . htmlspecialchars($_POST['pays']) . "<br>";
        echo "Adresse : " . htmlspecialchars($adresse) . "<br>";
    }
    if ($adresseLength > 130) {
        echo "<p style='color: red;'>Attention : L'adresse dépasse 130 caractères. Limitez-la à 200 caractères maximum.</p>";
    }

    echo "<p>Merci pour votre soumission.</p>";
    ?>

</body>

</html>