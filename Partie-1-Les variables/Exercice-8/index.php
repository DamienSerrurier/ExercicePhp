<?php
$firstNumber = 3 + 4;
$secondNumber = 5 * 20;
$thirdNumber = 45 / 5;
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - Exercice 8</title>
</head>

<body>
    <p>Créer 3 variables.
        <ul>
            <li>Dans la première mettre le résultat de l'opération 3 + 4.</li>
            <li>Dans la deuxième mettre le résultat de l'opération 5 * 20.</li>
            <li>Dans la troisième mettre le résultat de l'opération 45 / 5.</li>
        </ul>
        Afficher le contenu des variables.</p>

    <?php
    echo $firstNumber, $secondNumber, $thirdNumber;
    ?>
    
    <p><?php echo $firstNumber?></p>
    <p><?php echo $secondNumber?></p>
    <p><?php echo $thirdNumber?></p>

</body>

</html>