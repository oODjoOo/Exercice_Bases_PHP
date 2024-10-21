<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Fonction PHP</title>
</head>
<body>
    <?php



echo "<h2>1. Fonction sans paramètres et sans valeur de retour</h2>";
/*Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/

function greet(){
    echo "<p>Hello, world!</p>";
}

greet();






echo "<h2>2. Fonction avec paramètres et sans valeur de retour</h2>";
/*Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.
*/
$name = "Bill";

function greetUser($name){
    
    echo "<p>Hello, $name!</p>";
}
greetUser($name);







echo "<h2>3. Fonction avec paramètres et avec valeur de retour</h2>";
/*Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/

$a = 10;
$b = 15;

function sum($a , $b) {
    echo "<p>" . $a . "+" . $b . "=" . $a + $b . "</p>";

}
sum($a , $b);





echo "<h2>4. Fonction qui calcule la somme des nombres d'un tableau</h2>";
/*Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.
*/

$numbers = [1,2,3,4,5,6,7,8,9];
// foreach ($numbers as $number => $value) {
//     echo $value;
// }

function sumArray($numbers) {
    return array_sum($numbers);
}

echo sumArray($numbers);




echo "<h2>5. Fonction avec paramètre par défaut</h2>";
/*Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!

Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})
".
*/



function greetWithTime($name, $timeOfDay = "day") {
    echo "Good " . $timeOfDay . ", " . $name . "!";
}
greetWithTime($name, $timeOfDay = "day");






echo "<h2>6. Fonction qui retourne un tableau</h2>";
/*Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.
*/



function getFruits() {
    $fruits = ["pomme", "banane", "poire"];
    var_dump($fruits);
}
getFruits();





echo "<h2>7. Fonction avec une chaîne de caractères comme paramètre</h2>";
/*Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.
*/

function reverseString($str = "lundi") {
    echo "l'inverse de $str est " . strrev($str);

}
reverseString();




echo "<h2>8. Fonction avec paramètres et vérification de type</h2>";
/*Exercice : Créez une fonction appelée divide($a, $b) qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/

function divide($a, $b) {
    if ($b !== 0) {
        return $a / $b;
    } else {
        echo "error";
    }
}
echo divide($a, $b);





echo "<h2>9. Fonction qui utilise une boucle pour générer un résultat</h2>";
/*Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/

function generateMultiplicationTable($number = 4) {
    $i = 0;
    while ($i <= 10){
        echo $number . "x" . $i . "=" . $number * $i . "<br>";
        $i++;
    }

}

generateMultiplicationTable();




echo "<h2>10. Fonction avec une condition complexe</h2>";
/*Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense.
 La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".

*/

function checkEligibility($age, $hasLicense) {

    if ($age >= 18 && $hasLicense == "yes") {
        echo "éligible";
    } else {
        echo "not eligible";
    }

}
 checkEligibility($age = 18, $hasLicense = "yes");
?>
</body>
</html>



