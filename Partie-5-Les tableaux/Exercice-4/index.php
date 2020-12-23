<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - Exercice 4</title>
</head>

<body>
    <p>Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>

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

    //array_splice($months, 7, 1, 'août');
    $months[7] = 'août';
    echo '<br>';
    echo $months[7];
    var_dump($months);
    ?>

</body>

</html>