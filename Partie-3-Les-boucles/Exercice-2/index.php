<!-- Boucle WHILE -->

<?php
$firstNumber = 0;
$secondNumber = 2;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - Exercice 2</title>
</head>

<body>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
        Tant que la première variable n'est pas supérieure à 20 :
        multiplier la première variable avec la deuxième
        afficher le résultat
        incrementer la première variable
    </p>
    <ul>
        <li>multiplier la première variable avec la deuxième</li>
        <li>afficher le résultat</li>
        <li>incrementer la première variable</li>
    </ul>

    <?php
    while ($firstNumber < 20) {
        echo $firstNumber * $secondNumber . '<br>';
        $firstNumber++;
    }
    ?>

</body>

</html>