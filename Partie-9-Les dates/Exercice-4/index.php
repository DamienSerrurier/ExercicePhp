<?php
setlocale(LC_TIME, ['fr_FR', 'french', 'French_France.1252', 'fr_FR.ISO8859-1', 'fra']);
$day = utf8_encode(strftime('%A %e %B %Y %H:%M'));
$newDate = utf8_encode(strftime('%A %#d %B %Y %H:%M', mktime(15, 0, 0, 8, 2, 2016)));
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 9 - Exercice 4</title>
</head>

<body>
    <p>Afficher le timestamp du jour.
        Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>

    <?= 'La date du jour est ' . $day . '<br>' ?>
    <?= 'La nouvelle date est ' . $newDate ?>

</body>

</html>