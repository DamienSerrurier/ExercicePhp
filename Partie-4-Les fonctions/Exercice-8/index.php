<?php
/**
 * Fonction permettant de faire une addition
 * 
 * @param int $firstNumber prenant comme paramètre un nombre par défaut 5.
 * @param int $secondNumber prenant comme paramètre un nombre par défaut 9.
 * @param int $thirdNumber prenant comme paramètre un nombre par défaut 7.
 * 
 * @return int Retourne la somme des 3 paramettres $firstNumber, $secondNumber, $thirdNumber.
 */

function sumNumbers($firstNumber = 5, $secondNumber = 9, $thirdNumber = 7)
{
    return $firstNumber + $secondNumber + $thirdNumber;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exercice 8</title>
</head>

<body>
    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
        Tous les paramètres doivent avoir une valeur par défaut.</p>

    <p><?= sumNumbers(3, 3, 3) ?></p>
    <p><?= sumNumbers() ?></p>

</body>

</html>