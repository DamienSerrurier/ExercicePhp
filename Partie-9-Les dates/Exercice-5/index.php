<?php
$date1 = "23-12-2020"; //date fr le 23 décembre 2020
$date2 = "16-05-2016"; // date fr le 16 mai 2016

// On transforme les 2 dates en timestamp
$date1 = strtotime($date1);
$date2 = strtotime($date2);
 
// On récupère la différence de timestamp entre les 2 précédents
$nbDaysTimestamp = $date1 - $date2;
 
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbDays = $nbDaysTimestamp/86400; // 86 400 = 60*60*24
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 9 - Exercice 5</title>
</head>

<body>
    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>

    <?= 'Nombre de jours : '.$nbDays ?>
  
</body>

</html>