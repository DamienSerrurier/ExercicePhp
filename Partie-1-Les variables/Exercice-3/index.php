<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - Exercice 3</title>
</head>

<body>
    <p>Créer une variable km. L'initialiser à 1. Afficher son contenu.
        Changer sa valeur par 3. Afficher son contenu.
        Changer sa valeur par 125. Afficher son contenu.</p>

    <?php
    $km = 1;

    echo  '<p>' . $km . '</p>';
    $km = 3;
    echo '<p>' . $km . '</p>';
    $km = 125;
    echo '<p>' . $km . '</p>';
    ?>

</body>

</html>