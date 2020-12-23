<!-- Boucle WHILE -->

<?php
$number = 0;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - Exercice 1</title>
</head>

<body>
    <p>Créer une variable et l'initialiser à 0.
        Tant que cette variable n'atteint pas 10, il faut :
    </p>
    <ul>
        <li>l'afficher</li>
        <li>l'incrementer</li>
    </ul>

    <?php
    while ($number <= 10) {
        echo $number . '<br>';
        $number++;
    }
    ?>

</body>

</html>