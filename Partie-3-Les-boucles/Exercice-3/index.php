<!-- Boucle WHILE -->

<?php
$firstNumber = 100;
$secondNumber = 5;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 3 - Exercice 3</title>
</head>

<body>
    <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
        Tant que la première variable n'est pas inférieure ou égale à 10 :
    </p>
    <ul>
        <li>multiplier la première variable avec la deuxième</li>
        <li>afficher le résultat</li>
        <li>décrémenter la première variable</li>
    </ul>
    <?php
    while ($firstNumber >= 10) {
        $result = $firstNumber * $secondNumber;
        echo $result . '<br>';
        $firstNumber--;
    }
    ?>

</body>

</html>