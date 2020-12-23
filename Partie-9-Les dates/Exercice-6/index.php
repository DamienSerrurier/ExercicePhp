<?php
// Affiche le nombre de jours dans un mois à partir du calendrier Grégorien, ex : février.
$nbFebuaryDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 9 - Exercice 6</title>
</head>

<body>
    <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>

    <?= 'Nombre de jours dans le mois de février en 2016 : '.$nbFebuaryDays ?>
  
</body>

</html>