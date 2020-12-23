<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - Exercice 8</title>
</head>

<body>
    <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>


    <?php
    $months = array(
        'janvier',
        'février',
        'mars',
        'avril',
        'mai',
        'juin',
        'juillet',
        'aout',
        'septembre',
        'octobre',
        'novembre',
        'décembre'
    );

    for ($i = 0; $i < count($months); $i++) {
        echo $months[$i] . '<br>';
    }
    var_dump($months);
    ?>

</body>

</html>