<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les dates exo</title>
</head>
<body>

    <?php

echo '<h2>Exercice 1 : Afficher la date actuelle</h2>'; 
 /* 
 *  Objectif : Afficher la date sous le format 'jour/mois/annee' suivi de 'heure:minute:secondes'
 * 
 *  aide : utiliser la fonction date()
 */

 echo date('d/m/Y H:i:s');





echo '<h2>Exercice 2 : Formater une date</h2>'; 
 /* 
 *  Objectif : Transformer la date '2024-08-08' en format de type 08/08/2024
 * 
 *  aide : date() combinée à strtotime()
 */

$datespecial = strtotime('2024-08-08');
echo date('d/m/Y', $datespecial);



echo "<h2>Exercice 3 : Calculer l'âge d'une personne</h2>"; 
 /* 
 *  Objectif : Ecrire un script qui calcul l'age d'une personne née le '15-02-1990'
 * 
 *  aide : combinaison date() et strtotime()
 * 
 */

$age = strtotime('15-02-1990');
$now = time();

$agesecond = $now - $age;

$age = $agesecond / (60 * 60 * 24 * 365);

echo "<p>" . "Cette personne à: " . (int)$age . "ans</p>";




echo '<h2>Exercice 4 : Afficher le timestamp actuel</h2>'; 
 /* 
 *  Objectif : Afficher le timstamp actuel et expliquer sa signification
 * 
 *  aide : fonction time()
 * 
 */

//  Le timestamp est le nombre de secondes écoulées entre une certaine date
//  et le 1er janvier 1970 à 00:00:00.

 $maintenant = time();
 echo $maintenant;




echo '<h2>Exercice 5 : Convertir timestamp en date</h2>'; 
 /* 
 *  Objectif : Convertir le timstamp actuel en date lisible sous le format 'jour/mois/annee'
 * 
 *  Aide : combinaison date() et time()
 */

 $maintenant = time();
 $datelisible = date('d-m-Y', $maintenant);

 echo "<p>Date lisible : $datelisible </p>";




echo '<h2>Exercice 6 : Date dans une semaine</h2>'; 
 /* 
 *  Objectif : Afficher la date qui sera exactement une semaine après la date d'aujourd'hui
 * 
 *  aide : strtotime() avec +1 week
 */

 $maintenant = time();

 $jour = (60 * 60 * 24);

$semaine = $jour * 7;

$date = $maintenant + $semaine;

$datepro = date('d-m-Y', $date);

echo $datepro;




echo '<h2>Exercice 7 : Nombre de jours entre deux dates (BONUS)</h2>'; 
 /* 
 *  Objectif : Calculer le nombre de jours entre le 01-01-2024 et aujourd'hui
 * 
 *  Aide : soustraire les timestamps des deux dates et les convertir en jours
 */

$date1 = time();
$date2 = strtotime('01-01-2024');

$diffsec = $date1 - $date2;

// Convertir secondes en jours
$diffday = $diffsec / (60 * 60 * 24);

// $difflisible = date('d-m-Y', $diffday);

echo "Il y a: " . (int)$diffday . " jour différence entre maintenant et le 01-01-2024";




 ?>

</body>
</html>


