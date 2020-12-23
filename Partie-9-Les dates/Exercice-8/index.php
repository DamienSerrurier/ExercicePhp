<?php
// Affiche la date au format français avec l'année à 4 chiffres.
date_default_timezone_set('Europe/Paris');
$day = date('d/m/Y');

// Affiche la date du jour - 22 jour.
$minus20Day = date('d/m/Y', strtotime('-22 days'));
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 9 - Exercice 7</title>
</head>

<body>
    <p>Afficher la date du jour - 22 jours.</p>

    <?= 'La date du jour est ' . $day . '<br>'?>
    <?= 'La date du jour - 22 jours est ' . $minus20Day ?>
  
</body>

</html>