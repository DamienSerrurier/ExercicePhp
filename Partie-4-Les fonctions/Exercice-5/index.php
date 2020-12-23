<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 - Exercice 5</title>
</head>

<body>
    <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>

    <?php
    function str($number, $string)
    {
        return $number . $string;
    }

    var_dump(str(30, ' ans'));
    ?>

</body>

</html>