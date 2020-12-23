<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - Exercice 7</title>
</head>

<body>
    <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>

    <?php
    $department = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'
    ];

    // array_splice($department, 1, 0, [51 => 'Reims']);
    $department['51'] = 'Reims';
    echo $department['51'];
    var_dump($department);
    ?>

</body>

</html>