<?php
$string = 'Pomme';
$int = 5;
$float = 2.1;
$boolean = true;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - Exercice 4</title>
</head>

<body>
    <p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
        Les afficher.</p>

    <?php
    echo  '<p>' . $string . '</p>';
    echo '<p>' . $int . '</p>';
    echo '<p>' . $float . '</p>';
    echo '<p>' . $boolean . '</p>';
    echo gettype($boolean);
    ?>

</body>

</html>