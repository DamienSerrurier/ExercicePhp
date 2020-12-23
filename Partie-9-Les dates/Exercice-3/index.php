<?php
setlocale(LC_TIME, ['fr_FR','french','French_France.1252','fr_FR.ISO8859-1','fra']);
date_default_timezone_set('Europe/Paris');
$day = utf8_encode(strftime('%A %#d %B %Y'));
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 9 - Exercice 3</title>
</head>

<body>
    <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
        Bonus : Le faire en français.</p>

    <?= 'La date du jour est ' . $day ?>

</body>

</html>