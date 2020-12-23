<?php
date_default_timezone_set('Europe/Paris');
$day = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 9 - Exercice 1</title>
</head>

<body>
    <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).</p>

    <?= 'La date du jour est ' . $day ?>


</body>

</html>