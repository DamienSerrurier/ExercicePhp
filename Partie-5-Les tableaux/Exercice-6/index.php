<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 5 - Exercice 6</title>
</head>

<body>
    <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>

    <?php
    // Départements en string
    $department = [
        '02' => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme'
    ];

    echo $department['59'] . '<br>';
    echo '<br>';
    print_r($department); //afficher le tableau
    var_dump($department);
    ?>

</body>

</html>