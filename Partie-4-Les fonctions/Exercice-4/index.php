<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exercice 4</title>
</head>

<body>
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
    <ul>
        <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième.</li>
        <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième.</li>
        <li>Les deux nombres sont identiques si les deux nombres sont égaux.</li>
    </ul>

    <?php
    function str($number1, $number2)
    {
        if ($number1 > $number2) {
            return 'Le premier nombre est plus grand';
        } else if ($number1 < $number2) {
            return 'Le premier nombre est plus petit';
        } else {
            return 'Les deux nombres sont identiques';
        }
    }
    
    var_dump(str(30, 15));
    ?>

</body>

</html>